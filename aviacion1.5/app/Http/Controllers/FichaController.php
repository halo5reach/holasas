<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Ficha;
use App\Programa;
use App\Matricula;
use App\Aprendiz;
use App\Http\Requests\FichaRequest;
class FichaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programa = Programa::orderBy('codigo','ASC')->get();
        return view('formularios.fichas.ficha')->with(['programa'=>$programa]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FichaRequest $request)
    {
        $Ficha = new Ficha();
        $Ficha->codigo = $request->codigo;
        $Ficha->fecha_inicio = $request->inicio;     
        $Ficha->fecha_fin = $request->fin;       
        $Ficha->id_programa = $request->programa;
        
        
        if($Ficha->save()){
            flash('la Ficha '.$Ficha->codigo.' Se ah registrado correctamente', 'success');
        }else{
            flash('ah ocurrrido un error', 'danger');
        }

       
        return redirect()->route('ficha.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listado = Ficha::join('matriculas', 'fichas.id', '=', 'matriculas.id_ficha')
                ->join('aprendices', 'matriculas.id_aprendiz', '=', 'aprendices.id')
                ->select('aprendices.*', 'fichas.codigo','matriculas.id_aprendiz as matricula')
                ->where('fichas.codigo','=',$id)
                ->paginate(5);
        return view('ajax.fichaAprendiz')->with(['listar'=>$listado]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       //
    }
    public function matricula($id)
    {
        $ficha = Ficha::find($id);
        $consulta= DB::table('aprendices')
            ->whereNotExists(function ($query) {
                $query->select(DB::raw(1))
                      ->from('matriculas')
                      ->whereRaw('matriculas.id_aprendiz = aprendices.id');
            })
            ->paginate(10);
        return view('formularios.matriculas')->with(['lista'=>$consulta])->with(['ficha'=>$ficha]);
    }
    public function registrar_matriculas($id,$ficha)
    {
        $matricula = new matricula();
        $matricula->estado_matricula = 'formacion';
        $matricula->id_aprendiz = $id;
        $matricula->id_ficha = $ficha;
        $aprendiz= Aprendiz::find($id);
        if($matricula->save()){
            flash('el aprendiz '.$aprendiz->nombre.' Se ah Matriculado correctamente', 'success');
        }else{
            flash('ah ocurrrido un error', 'danger');
        }

       
        return redirect()->route('ficha.matricula',$ficha); 
    }
}
