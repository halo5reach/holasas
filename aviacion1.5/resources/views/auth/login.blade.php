@extends('layouts.app')

@section('content')
      
<header>
    <div class="container">
        <div class="encab">
            <div class="sena hidden-xs hidden-sm"><img src="{{ asset('imagenes/sena2.png') }}" class="img-responsive" alt="Responsive image"></div>
            <div class="sigla hidden-xs"><img src="{{ asset('imagenes/siglas.png') }}" class="img-responsive" alt="Responsive image"></div>
            <div class="logo"><img src="{{ asset('imagenes/logo2.png') }}" class="img-responsive" alt="Responsive image"></div>
        </div>
    </div> 
</header>
<nav class="navbar navbar-inverse"></nav>  
<div class="cuadro">
    <div class="row">
        <div class="col-xs-12 col-sm-7">
            <div id="carousel-1" class="carousel slide hidden-xs" data-ride="carousel">
              <!-- Indicadores -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-1" data-slide-to="1"></li>
                <li data-target="#carousel-1" data-slide-to="2"></li>
              </ol>
              <!-- contenido del slide -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="{{ asset('imagenes/1.jpg') }}" class="img-responsive img-slider" alt="...">
                  <div class="carousel-caption">
                   
                  </div>
                </div>
                <div class="item">
                  <img src="{{ asset('imagenes/2.jpg') }}" class="img-responsive img-slider" alt="...">
                  <div class="carousel-caption">
                    
                  </div>
                </div>
                <div class="item">
                  <img src="{{ asset('imagenes/3.jpg') }}" class="img-responsive img-slider" alt="...">
                  <div class="carousel-caption">
                    
                  </div>
                </div>
                
              </div>
              <!-- Controles -->
              <a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-1" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a> 
            </div>
        </div>
        <div class="col-xs-12 col-sm-5">
        <div class="containe">
            <form  method="POST" action="{{ url('/login') }}">
                                {{ csrf_field() }}
                <h1>Iniciar Sesion</h1>    
                <div class="form-row {{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email">Correo</label>            
                    <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Correo Electronico" required autofocus>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                </div>
                <div class="form-row {{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password">Contraseña</label>
                    <input id="password" type="password"  name="password" placeholder="Contraseña" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                  
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"> Remember Me
                            </label>
                        </div>
                    </div>
                </div>

                
                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                    Haz Olvidado Tu Contraseña?
                </a>
                 <br>
                <button type="submit">Ingresar</button> 
            </form>
                       
        </div>
        </div>
        
    </div>
</div>
@endsection

