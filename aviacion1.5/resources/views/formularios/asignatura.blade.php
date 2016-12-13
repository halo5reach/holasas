@extends('plantillas.plantilla')

@section('title')

@section('head','Centro Industrial y Aviacion')

@section('content')
        
  
                      
    <div class="box-header">
      <h3 class="box-title">Registrar Asignatura</h3>
    </div><!-- /.box-header -->

    <div id="notificacion_resul_fanu"></div>

    <form method="post" action="agregar_asignatura" class="form-horizontal form_entrada" >                
                       
      <div class="box-body col-xs-12">

        <div class="form-group col-sm-12 col-md-6 col-lg-6">
                    <label>Nombre</label>
                    <input type="Text" class="form-control" id="" placeholder="Nombre de la asignatura" required >
        </div>
        
        <div class="form-group col-sm-12 col-md-6 col-lg-6">
                    <label>Trimestre</label>
                    <input type="Text" class="form-control" id="" placeholder="Trimestre" required >
        </div>
      
        <div class="form-group col-sm-12 col-md-6 col-lg-6">
                  <label>Fecha de Inicio</label>
                  <input type="date" class="form-control" id=""   required >
        </div>
     
        <div class="form-group col-sm-12 col-md-6 col-lg-6">
                  <label>Fecha Final</label>
                  <input type="date" class="form-control" id=""   required >
        </div>

      
         
       
     
    </div>

        <div class="box-footer col-xs-12 ">
                   <button type="submit" class="btn btn-success">Guardar</button>
        </div>

    </form>

  

@endsection