@extends('admin.template.main')

@section('title','Lista de Usuarios')

@section('contenido')
	<div class="bordes">

		<table class="table table-striped">  
			<legend>Lista de Usuarios</legend>
			<thead>
				<th>ID</th>
				<th>Nombre</th>
				<th>Correo</th>
				<th>Tipo</th>
				<th>Acción</th>
			</thead>
			<tbody>
				@foreach($users as $user)
					<tr>
					<td>{{$user->id}}</td>
					<td>{{$user->name}}</td>
					<td>{{$user->email}}</td>
					<td>
						@if($user->type =="admin")
							<span class="label label-danger" >{{$user->type}}</span>
						@else
							<span class="label label-primary" >{{$user->type}}</span>
						@endif		
					</td>
					<td><a href="" class="btn btn-danger"></a><a href="" class="btn btn-warning"></a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	{{ $users->links() }}
	<div id="boton_crear_usuario">
	<a href="{{route('users.create') }}" class="btn btn-info">Nuevo Usuario</a>
	</div>
	{{--{!!$users->render()!!} funciona igual que el de arriba pertenece a laravel 5.1(links)--}} 
	</div>
@endsection 
  