<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('title','Default')│Panel de Administración</title>
	<link rel="stylesheet"  href="{{asset('plugins/bootstrap/css/bootstrap.css')}} ">
	<link rel="stylesheet"  href="{{asset('css/general.css')}} ">
</head>
<body>
<div id="contenedor">
@include('admin.template.partials.nav')

<section >
	
@yield('contenido')
		
</section>
<footer>
	
	Todos los derechos reservados tipmatik.cl

</footer>
<script src="{{asset('Plugins/Jquery/js/jquery.js')}}"></script><!-- Instalacion de jquery -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script> <!-- Instalacion de bootstrap -->
</div>
</body>
</html> 
