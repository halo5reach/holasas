@extends('plantillas.plantilla')

@section('title')

@section('head','Centro Industrial y Aviacion')

@section('content')
        
  
                      
    <div class="box-header">
      <h3 class="box-title">Registrar Competencia</h3>
    </div><!-- /.box-header -->

    <div id="notificacion_resul_fanu"></div>

    <form method="post" action="{{ route('competencia.store') }}" class="form-horizontal form_entrada" >
      <div class="box-body col-xs-12">
        {{ csrf_field() }}
        ﻿<input type="hidden" value="{{ $programa}}" name="id" required >  
        <div class="form-group col-sm-12 col-md-6 col-lg-6">
                  <label>Codigo</label>
                  <input type="number" class="form-control" name="codigo"  placeholder="Digite Codigo" required>
        </div>
        <div class="form-group col-sm-12 col-md-6 col-lg-6">
                    <label>Demoninacion</label>
                    <input type="Text" class="form-control" name="denominacion" placeholder="Programa" required >
        </div>
      
        <div class="form-group col-sm-12 col-md-6 col-lg-6">
                  <label>Duracion</label>
                  <input type="number" class="form-control" name="duracion"  placeholder="Digite Las Horas De Duracion" required >
        </div>
    </div>

        <div class="box-footer col-xs-12 ">
                   <input name="guardar" type="submit" value="Guardar/Salir" class="btn btn-success">
                   <input name="guardar" style="float:right;" type="submit" value="Guardar/Continuar" class="btn btn-success">
        </div>

    </form>

  

@endsection