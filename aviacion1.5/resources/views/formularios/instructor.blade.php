@extends('plantillas.plantilla')

@section('title')

@section('head','Centro Industrial y Aviacion')

@section('content')
        
  
                      
    <div class="box-header">
      <h3 class="box-title">Registrar Instructor</h3>
    </div><!-- /.box-header -->
    @include('errors.request')
    <div id="notificacion_resul_fanu"></div>

    <form method="post" action="{{ route('instructor.store') }}" class="form-horizontal form_entrada" >                
                        {{ csrf_field() }}   
      <div class="box-body col-xs-12">
        <div class="form-group col-sm-12 col-md-6 col-lg-6">
                  <label>Nombres</label>
                  <input type="text" class="form-control" name="nombre"  placeholder="Nombre Completo" required >
        </div>

        <div class="form-group col-sm-12 col-md-6 col-lg-6">
                  <label>Cedula</label>
                  <input type="number" class="form-control" name="cedula" placeholder="Numero de Identificacion" required >
        </div>


        <div class="form-group col-sm-12 col-md-6 col-lg-6">
                    <label>Telefono</label>
                    <input type="number" class="form-control" name="telefono" placeholder="Digite su Telefono" required >
        </div>

        <div class="form-group col-sm-12 col-md-6 col-lg-6">
                  <label>Correo</label>
                  <input type="email" class="form-control" name="correo"  placeholder="Digite Su Correo Electronico" required >
        </div>
     
    </div>

        <div class="box-footer col-xs-12 ">
                   <button type="submit" class="btn btn-success">Guardar</button>
        </div>

    </form>

  

@endsection