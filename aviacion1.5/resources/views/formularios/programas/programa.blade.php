@extends('plantillas.plantilla')

@section('title')

@section('head','Centro Industrial y Aviacion')

@section('content')
        
  
                      
    <div class="box-header">
      <h3 class="box-title">Registrar Programa</h3>
    </div><!-- /.box-header -->
    @include('errors.request')
    <div id="notificacion_resul_fanu"></div>

    <form method="post" action="{{ route('programa.store') }}" class="form-horizontal form_entrada" >                
        {{ csrf_field() }}   
      <div class="box-body col-xs-12">
        <div class="form-group col-sm-12 col-md-6 col-lg-6">
                  <label>Denominacion</label>
                  <input type="text" class="form-control" name="denominacion"  placeholder="Digite Denominacion" required >
        </div>

        <div class="form-group col-sm-12 col-md-6 col-lg-6">
                  <label>Codigo</label>
                  <input type="number" class="form-control" name="codigo"  placeholder="Digite Codigo" required >
        </div>
      
        <div class="form-group col-sm-12 col-md-6 col-lg-6">
                    <label>Estado</label>
                    <select name="estado"  class="form-control" required>
                        <option value="1" >Activo</option>
                        <option value="2" >Desactivado</option>
                        
                   
                    </select>                 
        </div>
     
        <div class="form-group col-sm-12 col-md-6 col-lg-6">
                    <label >Duracion de Etapa Lectiva</label>
                    <input type="" class="form-control" name="lectiva" placeholder="Duracion Lectiva" required>
        </div>
         
        <div class="form-group col-sm-12 col-md-6 col-lg-6">
                    <label>Duracion de Etapa Productiva</label>
                    <input type="" class="form-control" name="productiva" placeholder="Duracion Productiva" required >
        </div>

        <div class="form-group col-sm-12 col-md-6 col-lg-6">
                    <label>Nivel de Formacion</label>
                     <select name="nivel"  class="form-control" required>
                        <option value="1" >Tecnologo</option>
                        <option value="2" >Tecnico</option>
                        
                   
                    </select>  
        </div>

        <div class="form-group col-sm-12 col-md-6 col-lg-6">
                    <label>Justificacion</label>
                   <textarea type="" class="form-control" name="justificacion" placeholder="Justificacion" required ></textarea>
        </div>

        <div class="form-group col-sm-12 col-md-6 col-lg-6">
                    <label>Requisito Ingreso</label>
                    <textarea type="text" class="form-control" name="requisito" placeholder="Requisitos" required ></textarea> 
        </div>
     
          <div class="form-group col-sm-12 col-md-6 col-lg-6">
                    <label>Descripcion</label>
                    <textarea type="text" class="form-control" name="descripcion" placeholder="Descripcion" required ></textarea> 
        </div>

          <div class="form-group col-sm-12 col-md-6 col-lg-6">
                    <label>Aprendizaje etapa practica</label>
                    <textarea type="text" class="form-control" name="aprendizaje" placeholder="Aprendizaje" required ></textarea> 
        </div>

        <div class="form-group col-sm-12 col-md-6 col-lg-6">
                    <label>Ocupacion</label>
                    <textarea type="text" class="form-control" name="ocupacion" placeholder="Ocupacion" required ></textarea> 
        </div>

    </div>

        <div class="box-footer col-xs-12 ">
                   <button type="submit" class="btn btn-success">Guardar</button>
        </div>

    </form>

  

@endsection