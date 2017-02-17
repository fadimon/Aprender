@extends('admin.template.main')
@section('title','Listado de  Tags')
@section('contenido')
<table class="table table-striped">
    <thead>
        <th>
            ID
        </th>
        <th>
            Nombre
        </th>
        <th>
            Acción
        </th>
    </thead>
    <tbody>
        @foreach($tags as $tag)
        <tr>
            <td>
                {{$tag->id}}
            </td>
            <td>
                {{$tag->name}}
            </td>
            <td>
                <a class="btn btn-warning" href="{{route('tags.edit',$categoria->id)}}">
                    <span aria-hidden="true" class="glyphicon glyphicon-wrench">
                    </span>
                </a>
                <a class="btn btn-danger" href="{{route('admin.tags.destroy',$categoria->id)}}" onclick="return confirm('¿Esta seguro de eliminar la categoria seleccionada?')">
                    <span aria-hidden="true" class="glyphicon glyphicon-remove-circle">
                    </span>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
