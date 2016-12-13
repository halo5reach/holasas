<html>
    <head>
        <title> @yield('titulo',"Aviacion")</title>
       
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
         <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
         <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}">
          
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
         
        <link rel="stylesheet" href="{{ asset('css/skin-green.css') }}">
          
        <link rel="stylesheet" href="{{ asset('css/bootstrap3-wysihtml5.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/select.css') }}">

    </head>
   
    <body>
    @include('plantillas/contenido')
   
    <footer class="main-footer">
         <div class="pull-right hidden-xs">
     
    </footer>
   
       
    </body>
       
        <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap3-wysihtml5.all.min.js') }}"></script>
        <script src="{{ asset('js/app.min.js') }}"></script>
        <script src="{{ asset('js/demo.js') }}"></script>
        <script src="{{ asset('js/select.js') }}"></script>
        <script src="{{ asset('js/listar.js') }}"></script>
</html>
