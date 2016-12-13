<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pruebaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show($id)
    {
        $listado = DB::table('aprendices')
                ->join('matriculas', 'aprendices.id', '=', 'matriculas.id_aprendiz')
                ->join('fichas', 'matriculas.id_ficha', '=', 'fichas.id')
                ->join('programas', 'fichas.id_programa', '=', 'programas.id')
                ->join('competencias', 'programas.id', '=', 'competencias.id_programa')                
                ->where('aprendices.id','=',$id)->where('matriculas.estado_matricula','=','certificado')
                ->select('aprendices.*','programas.denominacion as programa','matriculas.estado_matricula','competencias.*','fichas.fecha_inicio','fichas.fecha_fin')
                ->get();
                        
        $pdf= \PDF::loadview('certificados.certificados',['aprendiz'=>$listado]);
        return $pdf->stream();
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
