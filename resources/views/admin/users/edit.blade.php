@extends('admin.template.main')

@section('title','Editar Usuario '.'"'.$usuario_edit->name.'".')

@section('contenido')
<div class="well">
    {!! Form::open(['route' =>['users.update',$usuario_edit],'method'  =>'PUT']) !!}{{-- se envian los datos  al metodo update del controlador UsersController --}}
    <div class="form-group">
        {!! Form::label('name','Nombre')!!}
            {!! Form::text('name',$usuario_edit->name,['class'=>'form-control','placeholder'=>'Nombre Completo','required'])!!}
    </div>
    <div class="form-group">
        {!! Form::label('email','Correo Electronico')!!}
            {!! Form::email('email',$usuario_edit->email,['class'=>'form-control','placeholder'=>'example@gmail.com','required'])!!}
    </div>
    <!--<div class="form-group">
        {{--{!! Form::label('password','Contraseña')!!}
            {!! Form::password('password',['class'=>'form-control','placeholder'=>'***********','required'])!!}--}}
    </div>-->
    <div class="form-group">
        {!! Form::label('type','tipo')!!}
            {!! Form::select('type',[''=>'Seleccione un Nivel...','member'=>'Miembro','admin'=>'Administrador'],null,['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
        {!! Form::submit('Editar',['class'=>'btn btn-primary'])!!}
    </div>
    {!!Form::close()!!}
</div>
@endsection
