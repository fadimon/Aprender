@extends('admin.template.main')

@section('title','Lista de Usuarios')

@section('contenido')
<div>
    <table class="table table-striped">
        <thead>
            <th>
                ID
            </th>
            <th>
                Nombre
            </th>
            <th>
                Correo
            </th>
            <th>
                Tipo
            </th>
            <th>
                Acción
            </th>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>
                    {{$user->id}}
                </td>
                <td>
                    {{$user->name}}
                </td>
                <td>
                    {{$user->email}}
                </td>
                <td>
                    @if($user->type =="admin")
                    <span class="label label-danger">
                        {{$user->type}}
                    </span>
                    @else
                    <span class="label label-primary">
                        {{$user->type}}
                    </span>
                    @endif
                </td>
                <td>
                    <a class="btn btn-warning" href="{{route('users.edit',$user->id)}}">
                        <span aria-hidden="true" class="glyphicon glyphicon-wrench">
                        </span>
                    </a>
                    <a class="btn btn-danger" href="{{route('admin.users.destroy',$user->id)}}" onclick="return confirm('¿Esta seguro de eliminar al usuario seleccionado?')">
                        <span aria-hidden="true" class="glyphicon glyphicon-remove-circle">
                        </span>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $users->links() }}
    <div id="boton_crear_usuario">
        <a class="btn btn-info" href="{{route('users.create') }}">
            Nuevo Usuario
        </a>
    </div>
    {{--{!!$users->render()!!} funciona igual que el de arriba pertenece a laravel 5.1(links)--}}
</div>
@endsection
