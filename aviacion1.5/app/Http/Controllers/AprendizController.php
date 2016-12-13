<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Aprendiz;
use App\Ficha;
use App\Matricula;
use App\Http\Requests\AprendizRequest;
class AprendizController extends Controller
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
        return view('formularios.aprendiz.aprendiz');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AprendizRequest $request)
    {
        
        $Aprendiz = new Aprendiz();
        $Aprendiz->nombre = $request->nombres;
        $Aprendiz->documento = $request->documento;
        $Aprendiz->t_documento = $request->tipodocumento;
        $Aprendiz->telefono = $request->telefono;
        $Aprendiz->fecha_nacimiento = $request->fecha;
        $Aprendiz->email = $request->email;
        
        
        if($Aprendiz->save()){
            flash('el aprendiz '.$Aprendiz->nombre.' Se ah registrado correctamente', 'success');
        }else{
            flash('ah ocurrrido un error', 'danger');
        }
       

        return redirect()->route('aprendiz.create');
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
        $aprendiz = Aprendiz::find($id);
        return view('formularios.aprendiz.aprendizEditar')->with(['aprendiz'=>$aprendiz]);
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
        $Aprendiz = Aprendiz::find($id);
        $Aprendiz->nombre = $request->nombres;
        $Aprendiz->documento = $request->documento;
        $Aprendiz->t_documento = $request->tipodocumento;
        $Aprendiz->telefono = $request->telefono;
        $Aprendiz->fecha_nacimiento = $request->fecha;
        $Aprendiz->email = $request->email;
        if($Aprendiz->save()){
            flash('el aprendiz '.$request->nombres.' Se ah editado correctamente', 'success');
        }else{
            flash('ah ocurrrido un error', 'danger');
        }
       

        return redirect()->route('aprendiz.edit',$id);
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
    public function certificar($id,$ficha)
    {
        //$consulta = Matricula::aprendiz($id);
        
         $consulta = Matricula::join('aprendices', 'aprendices.id', '=', 'matriculas.id_aprendiz')
                ->join('fichas', 'fichas.id', '=', 'matriculas.id_ficha')
                ->select('matriculas.id')
                ->where('aprendices.id','=',$id)
                ->where('fichas.id','=',$ficha)
                ->get();
        
        $id_matricula=$consulta->ToArray();
        $matricula = Matricula::find($id_matricula[0]['id']);
        $matricula->estado_matricula = 'certificado';
        
        $matricula->save();
    }
}
