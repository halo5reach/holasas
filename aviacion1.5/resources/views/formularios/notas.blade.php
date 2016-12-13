@extends('plantillas.plantilla')

@section('title')

@section('head','Centro Industrial y Aviacion')

@section('content')
        
  
                      
    <div class="box-header">
      <h3 class="box-title">Registrar Notas</h3>
    </div><!-- /.box-header -->

    <div id="notificacion_resul_fanu"></div>

    <form method="post" action="agregar_notas" class="form-horizontal form_entrada" >                
                       
      <div class="box-body col-xs-12">
        <div class="form-group col-sm-12 col-md-6 col-lg-6">
                  <label>Codigo de Programa</label>
                  <input type="number" class="form-control" name="c.programa"  placeholder="Codigo de Programa" required >
        </div>

        <div class="form-group col-sm-12 col-md-6 col-lg-6">
                    <label>Nombre del Programa</label>
                    <input type="Text" class="form-control" name="nombre" placeholder="Nombre del Programa" required >
        </div>

        <div class="form-group col-sm-12 col-md-6 col-lg-6">
                  <label>Notas</label>
                  <input type="number" class="form-control" name="notas"  placeholder="Digite la nota" required >
        </div>
     
    </div>

        <div class="box-footer col-xs-12 ">
                   <button type="submit" class="btn btn-success">Guardar</button>
        </div>

    </form>

  

@endsection