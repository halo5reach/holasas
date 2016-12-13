@extends('plantillas.plantilla')

@section('title')

@section('head','Centro Industrial y Aviacion')

@section('content')

      <h1>Descripcion Del Programa</h1>
      <hr>
      <div class="row">
          <div class="col-xs-12">

              <div class="col-xs-8">
                  <label class="col-xs-5">Codigo:</label>
                  <div class="col-xs-3">
                      {{ $programas->codigo }}
                  </div>
              </div>
              <div class="col-xs-8">
                  <label class="col-xs-5">Nombre:</label>
                  <div class="col-xs-3">
                      {{ $programas->denominacion }}
                  </div>
              </div>
              <div class="col-xs-8">
                  <label class="col-xs-5">Nivel De Formacion:</label>
                  <div class="col-xs-3">
                      {{ $programas->nvl_form }}
                  </div>
              </div>
              <div class="col-xs-8">
                  <label class="col-xs-5">Estado:</label>
                  <div class="col-xs-3">
                      {{ $programas->estado }}
                  </div>
              </div>
              <div class="col-xs-8">
                  <label class="col-xs-5">Duracion Lectiva:</label>
                  <div class="col-xs-3">
                      {{ $programas->duracion_lectiva }}
                  </div>
              </div>
              <div class="col-xs-8">
                  <label class="col-xs-5">Duracion Formacion:</label>
                  <div class="col-xs-3">
                      {{ $programas->duracion_practica }}
                  </div>
              </div>
              <div class="col-xs-8">
                  <label class="col-xs-5">Justificacion:</label>
                  <div class="col-xs-3">
                      {{ $programas->justificacion }}
                  </div>
              </div>
              <div class="col-xs-8">
                  <label class="col-xs-5">Requisito De Ingreso:</label>
                  <div class="col-xs-3">
                      {{ $programas->requisito_ingreso }}
                  </div>
              </div>
              <div class="col-xs-8">
                  <label class="col-xs-5">Descripcion:</label>
                  <div class="col-xs-3">
                      {{ $programas->descripcion }}
                  </div>
              </div>
              <div class="col-xs-8">
                  <label class="col-xs-5">Aprendizaje Etapa Practica:</label>
                  <div class="col-xs-3">
                      {{ $programas->aprendizaje_etapa_practica }}
                  </div>
              </div>
              <div class="col-xs-8">
                  <label class="col-xs-5">ocupacion:</label>
                  <div class="col-xs-3">
                      {{ $programas->ocupacion }}
                  </div>
              </div>
          </div>

      </div>
      <br>
      <div class="col-xs-6">
        <a href="{{ route('listar') }}" class="btn btn-success" >Volver</a>
      </div>
@endsection
