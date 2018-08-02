<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('icon/favicon.ico') }}"/>
    <link rel="icon" type="image/png" sizes="96x96"  href="{{ asset('icon/favicon.png') }}"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Bets</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="{{ asset('csss/bootstrap.css')}}" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Cambo|Poppins:400,600' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="{{ asset('csss/fonts/pe-icon-7-stroke.css') }}"/>

    <!--link rel="stylesheet" href="{{ asset('csss/bootstrap.min.css') }}"-->
    <link rel="stylesheet" href="{{ asset('csss/material-bootstrap-wizard.css') }}">
    <!--link rel="stylesheet" href="{{ asset('csss/demo.css') }}"-->
    <link rel="stylesheet"  href="{{ asset('csss/gaia.css') }}">
    @yield('estilos_nuevos')
  </head>
  <body>
      @include('Panel.Panel_lateral_superior')
      @include('Panel.Panel_central_inicio')

  </body>
  <!--script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script-->
  <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/modernizr.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/gaia.js')}}"></script>


  <script type="text/javascript" src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/material-bootstrap-wizard.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.validate.min.js')}}"></script>
  @yield('scripts_nuevos')
</html>