<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::orderBy('id','ASC')->paginate(10);
        return view('formularios.usuario.listar')->with(['user'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('formularios.usuario.agregar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->password === $request->password_confirmation){

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->type = $request->tipousuario;
            
            if($user->save()){
                flash('el usuario '.$user->name.' Se ah registrado correctamente', 'success');
            }else{
                flash('ah ocurrido un error al registrar', 'danger');
            }
        }else{
            flash('Las Contraseña No Coinciden', 'danger');
        }

       
        return redirect()->route('user.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('formularios.usuario.editar')->with(['user'=>$user]);
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
    
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;        
        $user->type = $request->tipousuario;
        
        if($user->save()){
            flash('el usuario '.$user->name.' Se ah editado correctamente', 'success');
        }else{
            flash('ah ocurrido un error al registrar', 'danger');
        }
                       
        return redirect()->route('user.edit',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if($user->delete()){
            flash('Se ah eliminado al usuario correctamente', 'success');
        }else{
            flash('ah ocurrido un error al registrar', 'danger');
        }
        return redirect()->route('user.index');
    }
}
