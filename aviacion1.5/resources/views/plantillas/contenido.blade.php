<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <div class="logo">

      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="{{ asset('imagenes/logo.png') }}"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><a href="{{ url('/') }}"><b>Aviacion</b></a></span>
    </div>
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
       <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->

          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span>{{ auth::user()->name }}</span>
            </a>
            <!--
            <ul class="dropdown-menu">

              <li class="user-header">
                <img src="" class="img-circle" alt="User Image">


              </li>
               Menu Body
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>

              </li>
                  Menu Footer
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
             Control Sidebar Toggle Button -->
          <li> 
               <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  Cerrar Sesion
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 {{ csrf_field() }}
              </form>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <ul class="sidebar-menu">
        <li class="header">Menu</li>
       @if(auth::user()->administrador())
        <li class="treeview">
          <a href="#">
            <i class="fa  fa-users"></i> <span>Usuarios</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{ route('user.create') }}"><i class="fa fa-check-circle-o"></i>Agregar Usuario</a></li>
            <li class="active"><a href="{{ route('user.index') }}"><i class="fa fa-check-circle-o"></i>Ver Lista de Usuarios</a></li>
          </ul>
        </li>
        @endif

        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Aprendiz</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('aprendiz.create') }}"><i class="fa fa-check-circle-o"></i>Agregar Aprendiz</a></li>
            <li><a href="{{ url('notas') }}"><i class="fa fa-check-circle-o"></i>Agregar Notas</a></li>
            <li class="active"><a href="{{ route('listar') }}"><i class="fa fa-check-circle-o"></i>Ver Lista de Aprendices</a></li>
          </ul>
        </li>

         <li class="treeview">
          <a href="#">
            <i class="fa fa-pencil-square-o"></i> <span>Registrar</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('instructor.create') }}"><i class="fa fa-check-circle-o"></i>Registrar Instructor</a></li>
            <li><a href="{{ route('programa.create') }}"><i class="fa fa-check-circle-o"></i>Registrar Programas</a></li>
            <li><a href="{{ route('ficha.create') }}"><i class="fa fa-check-circle-o"></i>Registrar Fichas</a></li>
          </ul>
        </li>

    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <!-- Content Header (Page header) -->
    <section class="content-header">

        <h1 class="text-center">

          <small>@yield("head","Control panel")</small>
        </h1>
    <div class="row">


      <div class="box box-primary col-xs-12">


      @yield("content")
      </div>
    </div>
       @include('flash::message')
    </section>

    <!-- Main content -->

  </div>
  <!-- /.content-wrapper -->
