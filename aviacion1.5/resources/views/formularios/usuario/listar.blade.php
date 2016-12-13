@extends('plantillas.plantilla')

@section('title')

@section('head','Centro Industrial y Aviacion')

@section('content')
 <br>
  <br>
<form class="navbar-form navbar-left">
    <div class="form-group">
      <input id="bus" type="text" size="50" class="form-control" placeholder="Search">
    </div>
   <a onclick="ajx();" href="#" class="btn btn-success btn-sm"><i class="fa fa-search" aria-hidden="true"></i></a>
  </form>
  <div id="tabla">
    <table id="" class="table table-striped table-hover">
      <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Tipo Usuario</th>       
        <th align="center" colspan="2"> Accion</th>
      </thead>
      <tbody>

        @foreach($user as $users)
          <tr>
            <th>{{ $users->id }}</th>            
            <th>{{ $users->name }}</th>
            <th>{{ $users->email }}</th>
            <th>{{ $users->type }}</th>            
            <th>
            <a href="{{ route('user.edit',$users->id) }}" class="btn  btn-success btn-xs" title="Editar Informacion del aprendiz"><i class="fa fa-pencil-square-o"></i>Editar</a>
            <a href="{{ route('user.eliminar', $users->id) }}" onclick="return confirm('Estas seguro que quieres eliminar a este usuario?');" class="btn  btn-success btn-xs" title="Matricular aprendices"><i class="fa fa-fw fa-eye"></i>eliminar</a>
            </th>
          </tr>
        @endforeach
      </tbody>
    </table>
  {!! str_replace('/?','?',$user->render()) !!}
  <div id="fantasma">
  </div>
@endsection