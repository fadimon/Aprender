<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	{{--<link rel="stylesheet" type="text/css" href="/css/general.css">  forma tradiciomal de invocar un CSS--}}
	<link rel="stylesheet" type="text/css" href="{{asset('css/general.css')}}">{{-- Metodo Blade para invocar un CSS--}}
	<title>{{$article->title}}</title>
</head>
<body>
 <P><h1>CODIGO FACILITO</h1>  </P>
<br>
<h1>{{$article->title}}</h1>
<hr>
{{$article->content}}
<hr>
{{$article->user->name}} │ {{$article->category->name}}│
@foreach($article->tags as $etiqueta) {{--realizo recorrido porque un articulo puede tener muchos tags(relación muchos a muchos)--}}
{{$etiqueta->name}}
@endforeach
</body>
</html>




