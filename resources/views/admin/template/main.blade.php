	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>@yield('title','Default')│Panel de Administración</title>
		<link rel="stylesheet"  href="{{asset('plugins/bootstrap/css/bootstrap.css')}} ">
		<link rel="stylesheet"  href="{{asset('css/general.css')}} ">
	</head>
	<body >
		<div class="contenedor">

			@include('admin.template.partials.nav')
			@include('flash::message')	
			<section >
				@yield('contenido')
			</section>
			
			<footer class="bordes">
				
				<p> © Copyright 2016 - 2017. Tipmatik.Cl. All Rights Reserved. <span class="pull-right"> Codigo Facilito </span></p>

			</footer>
		</div>	
		<script src="{{asset('Plugins/Jquery/js/jquery.js')}}"></script><!-- Instalacion de jquery -->
		<script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script> <!-- Instalacion de bootstrap -->

	</body>
	</html> 
