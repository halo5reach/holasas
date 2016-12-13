@extends('plantillas.plantilla')

@section('title')

@section('head','Centro Industrial y Aviacion')

@section('content')
  <div class="box-header">
     <h1 class="box-title">Matricular En La Ficha: {{ $ficha->codigo }}</h1>
  </div><!-- /.box-header -->     
  <br>
<form class="navbar-form navbar-left">
    <div class="form-group">
      <input id="buscar_matriculas" type="text" size="60" class="form-control" placeholder="Search">
    </div>  
    <a onclick="" href="#" class="btn btn-success btn-sm"><i class="fa fa-search" aria-hidden="true"></i></a>
  </form>
  <div id="tabla">

    @include('ajax.matricula')
  
  <div id="fantasma">
  </div> 
  {!! str_replace('/?','?',$lista->render()) !!}
@endsection