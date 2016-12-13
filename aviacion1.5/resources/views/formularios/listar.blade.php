@extends('plantillas.plantilla')

@section('title')

@section('head','Centro Industrial y Aviacion')

@section('content')
 <br>
  <br>
<form class="navbar-form navbar-left">
    <div class="form-group">
      <input id="buscar" type="text" class="form-control" placeholder="Search">
    </div>
   <div class="form-group">
      <div class="selectMenu">
        <div class="front">
          <span id="select">programa</span>
        </div>
        <div class="back">
          <ul id="sel">
            <li id="programa">programa</li>
            <li id="aprendiz">aprendiz</li>
            <li id="ficha">ficha</li>
          </ul>
        </div>
      </div>
    </div>
    <a onclick="ajx();" href="#" class="btn btn-success btn-sm"><i class="fa fa-search" aria-hidden="true"></i></a>
  </form>
  <div id="tabla">
  @include('ajax.programaPrueba')
  {!! str_replace('/?','?',$listar->render()) !!}
  <div id="fantasma">
  </div>
@endsection
