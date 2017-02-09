@extends ('admin.template.main')
@section('title','Listado de Categorias')
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
                Acción
            </th>
        </thead>
        <tbody>
            @foreach($categorias as $categoria)
            <tr>
                <td>
                    {{$categoria->id}}
                </td>
                <td>
                    {{$categoria->name}}
                </td>
                <td>
                    <a class="btn btn-warning" href="{{route('categories.edit',$categoria->id)}}">
                        <span aria-hidden="true" class="glyphicon glyphicon-wrench">
                        </span>
                    </a>
                    <a class="btn btn-danger" href="{{route('admin.categories.destroy',$categoria->id)}}" onclick="return confirm('¿Esta seguro de eliminar la categoria seleccionada?')">
                        <span aria-hidden="true" class="glyphicon glyphicon-remove-circle">
                        </span>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
        {{ $categorias->links() }}
    </div>
    <div id="boton_crear">
        <a class="btn btn-info" href="{{route('categories.create') }}">
            Nueva Categoria
        </a>
    </div>
</div>
@endsection
