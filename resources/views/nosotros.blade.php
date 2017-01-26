@extends ('master')
@section('titulo','Nosotros')

@section('contenido')
<h1>Quienes Somos</h1>
<p>Aqui va el texto de Nosotros</p>
<p>Mi nombre es:  {{$nombre}} y trabajo en la empresa {{$empresa}}</p>
@if($nombre=='mauricio')
	<p>Si soy Mauricio</p>
@else
	<p>No, no soy mauricio</p> 
@endif

@for($i=0; $i<10;$i++)
	<p>la variable es: {{$i }}<br/></p>
@endfor		


@endsection