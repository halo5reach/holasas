<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Programa;
use App\Http\Requests\ProgramaRequest;
class ProgramaController extends Controller
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
        return view('formularios.programas.programa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProgramaRequest $request)
    {
        $Programa = new Programa();
        $Programa->denominacion = $request->denominacion;
        $Programa->codigo = $request->codigo;
        $Programa->estado = $request->estado;
        $Programa->duracion_lectiva = $request->lectiva;
        $Programa->duracion_practica = $request->productiva;
        $Programa->nvl_form = $request->nivel;
        $Programa->justificacion = $request->justificacion;
        $Programa->requisito_ingreso = $request->requisito;
        $Programa->descripcion = $request->descripcion;
        $Programa->aprendizaje_etapa_practica = $request->aprendizaje;
        $Programa->ocupacion = $request->ocupacion;

        
        if($Programa->save()){
            flash('el Programa '.$Programa->denominacion.' Se ah registrado correctamente', 'success');
        }else{
            flash('ah ocurrrido un error', 'danger');
        }

        return redirect()->route('competencia.create',$Programa->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $programa = Programa::find($id);
        return view('formularios.programas.mostrarProgramas')->with(['programas'=>$programa]);
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
