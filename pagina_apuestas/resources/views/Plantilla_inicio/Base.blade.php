<!DOCTYPE html>
<html en="es">
  <head>
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/favicon.ico') }}"/>
    <link rel="icon" type="image/png" sizes="96x96"  href="{{ asset('img/favicon.png') }}"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Bets</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
     <link href="{{ asset('css/material-dashboard.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('demo/demo.css') }}">
    
    @yield('estilos_nuevos')
  </head>
  <body style="background-image: url('https://bets4.pro/template/img/bg.jpg')">
      @include('Panel.Panel_central_inicio')

  </body>
  <script type="text/javascript" src="{{asset('js/core/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/core/popper.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/core/bootstrap-material-design.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/plugins/chartist.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/plugins/bootstrap-notify.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/material-dashboard.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('demo/demo.js')}}"></script>

  @yield('scripts_nuevos')
</html>