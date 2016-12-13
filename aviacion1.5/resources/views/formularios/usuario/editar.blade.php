@extends('plantillas.plantilla')

@section('title')

@section('head','Centro Industrial y Aviacion')

@section('content')



          <div class="box-header">
                <h3 class="box-title">Nuevo Usuario</h3>
              </div><!-- /.box-header -->

          <div id="notificacion_resul_fanu"></div>
        <form  id="f_nuevo_usuario"  method="post"  action="{{ route('user.update',$user->id) }}" class="form-horizontal form_entrada" >
         {{ csrf_field() }}
         <input type="hidden" name="_method" value="PUT">﻿
          <div class="box-body col-xs-12">
            <div class="form-group col-sm-12 col-md-6 col-lg-6">
              <label for="name" class="control-label">Nombre</label>
                  <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" placeholder="Nombre Completo" required autofocus>
                  @if ($errors->has('name'))
                      <span class="help-block">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
            </div>

            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                        <label>Tipo Usuario</label>
                        <select id="tipousuario" name="tipousuario"  class="form-control selectpicker" required>
                            
                            <option value="{{ $user->type }}" >
                              @if($user->type == "admin")
                                  Administrador
                              @else
                                Usuario
                              @endif
                            </option>
                            <option value="user" >Usuario</option>
                            <option value="admin" >Administrador</option>

                        </select>
            </div>

            <div class="form-group col-sm-7">
              <label for="email" class="control-label">correo</label>
                  <input id="email" type="email" class="form-control" name="email" placeholder="Correo Electronico" value="{{ $user->email }}" required>
                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
            </div>

            

          </div>

            <div class="box-footer col-xs-12 ">
                       <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>
@endsection
