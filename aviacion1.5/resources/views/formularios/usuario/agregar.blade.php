@extends('plantillas.plantilla')

@section('title')

@section('head','Centro Industrial y Aviacion')

@section('content')



          <div class="box-header">
                <h3 class="box-title">Nuevo Usuario</h3>
              </div><!-- /.box-header -->

          <div id="notificacion_resul_fanu"></div>
        <form  id="f_nuevo_usuario"  method="post"  action="{{ route('user.store') }}" class="form-horizontal form_entrada" >
         {{ csrf_field() }}

          <div class="box-body col-xs-12">
            <div class="form-group col-sm-12 col-md-6 col-lg-6">
              <label for="name" class="control-label">Nombre</label>
                  <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nombre Completo" required autofocus>
                  @if ($errors->has('name'))
                      <span class="help-block">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
            </div>

            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                        <label>Tipo Usuario</label>
                        <select id="tipousuario" name="tipousuario" class="form-control selectpicker" required>
                            <option value="user" >Usuario</option>
                            <option value="admin" >Administrador</option>

                        </select>
            </div>

            <div class="form-group col-sm-7">
              <label for="email" class="control-label">correo</label>
                  <input id="email" type="email" class="form-control" name="email" placeholder="Correo Electronico" value="{{ old('email') }}" required>
                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
            </div>

            <div class="form-group col-sm-12 col-md-6 col-lg-6">
              <label for="password" class="control-label">Contraseña</label>
                  <input id="password" type="password" class="form-control" placeholder="Contraseña" name="password" required>
                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
            </div>

            <div class="form-group col-sm-12 col-md-6 col-lg-6">
              <label for="password-confirm" class=" control-label">Confirmar contraseña</label>
                  <input id="password-confirm" type="password" class="form-control" placeholder="Confirmar Contraseña" name="password_confirmation" required>
                  @if ($errors->has('password_confirmation'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password_confirmation') }}</strong>
                      </span>
                  @endif
          </div>

          </div>

            <div class="box-footer col-xs-12 ">
                       <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>
@endsection
