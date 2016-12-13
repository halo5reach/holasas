@extends('plantillas.plantilla')

@section('title')

@section('head','Centro Industrial y Aviacion')

@section('content')
        
  
                      
    <div class="box-header">
      <h3 class="box-title">Matricula</h3>
    </div><!-- /.box-header -->
    @include('errors.request')
    <div id="notificacion_resul_fanu"></div>

    <form method="post" action="{{ route('matriculas.store') }}" class="form-horizontal form_entrada" >                
                       
      <div class="box-body col-xs-12">
              {{ csrf_field() }}  
        <div class="form-group col-sm-12 col-md-6 col-lg-6">
                  <label>Codigo de Matricula</label>
                  <input type="number" class="form-control" id="" name="codigo" placeholder="Codigo de Matricula"   required >
        </div>
    
        <div class="form-group col-sm-12 col-md-6 col-lg-6">
                        <label>Estado</label>
                        <select  name="estado" class="form-control" required>
                            <option value="en_formacion" >En Formacion</option>
                            <option value="aplazado" >Aplazado</option>
                            <option value="cancelado">Cancelado</option>                       
                        </select>                 
            </div>
        
       <div class="form-group col-sm-12 col-md-6 col-lg-6">
                        <label>Fichas</label>
                        <input type="number" class="form-control" name="ficha" placeholder="Codigo de la Ficha" required >
       </div>  
        <div class="form-group col-sm-12 col-md-6 col-lg-6">
                        <label>Aprendiz</label>
                       <input type="number" class="form-control" name="documento" placeholder="Documento Del Aprendiz" required >               
        </div>     
    </div>

        <div class="box-footer col-xs-12 ">
                   <button type="submit" class="btn btn-success">Guardar</button>
        </div>

    </form>

  

@endsection