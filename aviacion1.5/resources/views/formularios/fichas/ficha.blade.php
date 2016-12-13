@extends('plantillas.plantilla')

@section('title')

@section('head','Centro Industrial y Aviacion')

@section('content')
        
  
                      
    <div class="box-header">
      <h3 class="box-title">Registrar Ficha</h3>
    </div><!-- /.box-header -->
    @include('errors.request')
    <div id="notificacion_resul_fanu"></div>

    <form method="post" action="{{ route('ficha.store') }}" class="form-horizontal form_entrada" >                
      {{ csrf_field() }} 
      <div class="box-body col-xs-12">
        <div class="form-group col-sm-12 col-md-6 col-lg-6">
                  <label>Codigo</label>
                  <input type="number" class="form-control" name="codigo"  placeholder="Digite Codigo" required >
        </div>

        
        <div class="form-group col-sm-12 col-md-6 col-lg-6">
                    <label>Programa</label>
                    <select name="programa"  class="form-control" placeholder="seleccione un programa" required>
                        @foreach($programa as $pro)
                        <option value="{{ $pro->id }}" >{{ $pro->denominacion }}</option>
                        @endforeach
                    </select>                 
        </div>

        <div class="form-group col-sm-12 col-md-6 col-lg-6">
                  <label>Fecha de Inicio</label>
                  <input type="date" class="form-control" name="inicio" required >
        </div>
     
        <div class="form-group col-sm-12 col-md-6 col-lg-6">
                  <label>Fecha Final</label>
                  <input type="date" class="form-control" name="fin" required >
        </div>
         
        
     
    </div>

        <div class="box-footer col-xs-12 ">
                   <button type="submit" class="btn btn-success">Guardar</button>
        </div>

    </form>

  

@endsection