<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('title','Default')│Panel de Administración</title>
	<link rel="stylesheet"  href="{{asset('plugins/bootstrap/css/bootstrap.css')}} ">
</head>
<body>
@include('admin.template.partials.nav')
<section>@yield('contenido')</section>
<script src="{{asset('Plugins/Jquery/js/jquery.js')}}"></script><!-- Instalacion de jquery -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script> <!-- Instalacion de bootstrap -->
</body>
</html>
