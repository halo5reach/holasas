<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Competencia;

class CompetenciaController extends Controller
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
    public function create($id)
    {
        return view('formularios.competencias')->with(['programa'=>$id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Competencia = new Competencia;
        $Competencia->codigo = $request->codigo;
        $Competencia->denominacion = $request->denominacion;
        $Competencia->duracion = $request->duracion;
        $Competencia->id_programa = $request->id;

        if($Competencia->save()){

            flash('La Competencia '.$Competencia->codigo.' Se ah registrado correctamente', 'success');           

        }else{                   
            flash('ah ocurrrido un error', 'danger');
        }
        
        if ($request->guardar == "Guardar/Continuar") {
            return redirect()->route('competencia.create',$request->id);
        }else{
            return redirect()->route('programa.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
