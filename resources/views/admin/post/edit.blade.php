@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.submenu')
        <div class="col-sm-10">

            {!! Form::open(['route'=>['post.update',$post],'method'=>'PUT','files'=>true]) !!}

            <div class="jumbotron">
                <div class="form-group">
                    <label for="title">Ingrese Título del Servicio</label>
                    {!! Form::text('title',$post->title,['class'=>'form-control','maxlength'=>'67']) !!}
                </div>
                <div class="form-group">
                    <label for="description">Ingrese Descripción del Servicio</label>
                    {!! Form::textarea('description',$post->description,['class'=>'form-control','maxlength'=>'155','rows'=>'3']) !!}
                </div>

                <div class="form-group">
                    <label for="nombre">Ingrese Título del Servicio</label>
                    {!! Form::text('nombre',$post->nombre,['class'=>'form-control','maxlength'=>'100']) !!}
                </div>

                <div class="form-group">
                    <label for="descripcion">Ingrese Descripción Extendida del Servicio</label>
                    {!! Form::textarea('descripcion',$post->descripcion,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    <label for="orden">Ingrese Orden del Servicio</label>
                    {!! Form::text('orden',$post->orden,['class'=>'form-control']) !!}
                </div>


                <div class="form-group">
                    <label for="urlfoto">Ingrese Imagen del Servicio</label> <br>
                    <img src="/img/post/{{$post->urlfoto}}">
                    {!! Form::file('urlfoto') !!}
                </div>
            </div>           
            {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
<script>
    CKEDITOR.replace( 'descripcion' );
</script>
@endsection