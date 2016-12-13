<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Programa;
use App\ficha;
use App\aprendiz;


class listarController extends Controller
{
    public function index()
    {
         $listado = DB::table('programas')->join('fichas', 'programas.id', '=', 'fichas.id_programa')
            ->select('programas.*', 'fichas.codigo as ficha')
            ->orderBy('programas.id','ASC')->paginate(10);

        return view('formularios.listar')->with(['listar'=>$listado]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function buscar($tabla,$buscar='')
    {

        if($tabla == "programa"){
            $tabla="programas";
            $listado = DB::table($tabla)
                ->join('fichas', 'programas.id', '=', 'fichas.id_programa')
                ->select('programas.*', 'fichas.codigo as ficha')
                ->where('programas.codigo','like','%'.$buscar.'%')
                ->orwhere('programas.denominacion','like','%'.$buscar.'%')
                ->paginate(10);
            return view('ajax.programaPrueba')->with(['listar'=>$listado]);

        }elseif($tabla == "aprendiz"){
            $tabla="aprendices";
            $listado = DB::table($tabla)
                ->join('matriculas', 'aprendices.id', '=', 'matriculas.id_aprendiz')
                ->join('fichas', 'matriculas.id_ficha', '=', 'fichas.id')
                ->join('programas', 'fichas.id_programa', '=', 'programas.id')                
                ->select('aprendices.*', 'fichas.codigo','fichas.id as id_ficha', 'programas.denominacion','matriculas.estado_matricula')
                ->where('aprendices.nombre','like','%'.$buscar.'%')
                ->orwhere('aprendices.documento','like','%'.$buscar.'%')
                ->paginate(10);
            return view('ajax.aprendizPrueba')->with(['listar'=>$listado]);

        }elseif($tabla == "ficha"){
            $tabla="fichas";
            $listado = DB::table($tabla)
                ->join('programas', 'fichas.id_programa', '=', 'programas.id')
                ->select('fichas.*', 'programas.codigo as programa','programas.denominacion')
                ->where('fichas.codigo','like','%'.$buscar.'%')
                ->paginate(10);
            return view('ajax.fichaPrueba')->with(['listar'=>$listado]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($tabla)
    {
       $buscar="";
        if($tabla == "programa"){
            $tabla="programas";
            $listado = DB::table($tabla)
                ->join('fichas', 'programas.id', '=', 'fichas.id_programa')
                ->select('programas.*', 'fichas.codigo as ficha')
                ->where('programas.codigo','like','%'.$buscar.'%')
                ->orwhere('programas.denominacion','like','%'.$buscar.'%')
                ->paginate(10);
            return view('ajax.programaPrueba')->with(['listar'=>$listado]);

        }elseif($tabla == "aprendiz"){
            $tabla="aprendices";
            $listado = DB::table($tabla)
                ->join('matriculas', 'aprendices.id', '=', 'matriculas.id_aprendiz')
                ->join('fichas', 'matriculas.id_ficha', '=', 'fichas.id')
                ->join('programas', 'fichas.id_programa', '=', 'programas.id')
                ->select('aprendices.*', 'fichas.codigo','fichas.id as id_ficha', 'programas.denominacion','matriculas.estado_matricula')
                ->where('aprendices.nombre','like','%'.$buscar.'%')
                ->orwhere('aprendices.documento','like','%'.$buscar.'%')
                ->paginate(10);
            return view('ajax.aprendizPrueba')->with(['listar'=>$listado]);

        }elseif($tabla == "ficha"){
            $tabla="fichas";
            $listado = DB::table($tabla)
                ->join('programas', 'fichas.id_programa', '=', 'programas.id')
                ->select('fichas.*', 'programas.codigo as programa','programas.denominacion')
                ->where('fichas.codigo','like','%'.$buscar.'%')
                ->paginate(10);
            return view('ajax.fichaPrueba')->with(['listar'=>$listado]);
        }
    }

    public function listar_matriculas($mensaje)
    {
        $consulta= DB::table('aprendices')
            ->whereNotExists(function ($query) {
                $query->select(DB::raw(1))
                      ->from('matriculas')
                      ->whereRaw('matriculas.id_aprendiz = aprendices.id');
            })->where('aprendices.nombre','like','%'.$mensaje.'%')
            ->orwhere('aprendices.documento','like','%'.$mensaje.'%')
            ->paginate(10);
            
        return view('ajax.matricula')->with(['listar'=>$consulta]);
    }
    
}
