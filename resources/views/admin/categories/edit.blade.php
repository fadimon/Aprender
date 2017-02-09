@extends ('admin.template.main')

@section('title','Editar Categoria '.$categoria_edit->name)

@section('contenido')
<div class="well">
    {!!Form::open(['route'=>['categories.update',$categoria_edit], 'method'=>'PUT']) !!}
    <div class="form-group">
        {!!Form::label('name','Nombre')!!}
            {!!Form::text('name',$categoria_edit->name,['class'=>'form-control','placeholder'=>'Nombre de la Categoria','required',])!!}
            {{--*********guia para usar este comando****
            {!!Form::text('nombre del campo donde se insertaran los datos',null,['class'=>'form-control','placeholder'=>'Nombre de la Categoria','required',])!!}--}}
    </div>
    <div class="form-group">
        {!!Form::submit('Editar',['class'=>'btn btn-primary'])!!}
    </div>
    {!!Form::close()!!}
</div>
@endsection
