@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.submenu')
        <div class="col-sm-10">

            {!! Form::open(['route'=>['categoria.update',$categoria],'method'=>'PUT','files'=>true]) !!}

            <div class="jumbotron">
                <div class="form-group">
                    <label for="title">Ingrese TITLE</label>
                    {!! Form::text('title',$categoria->title,['class'=>'form-control','maxlength'=>'67']) !!}
                </div>
                <div class="form-group">
                    <label for="description">Ingrese description</label>
                    {!! Form::textarea('description',$categoria->description,['class'=>'form-control','maxlength'=>'155','rows'=>'3']) !!}
                </div>

                <div class="form-group">
                    <label for="nombre">Ingrese NOMBRE</label>
                    {!! Form::text('nombre',$categoria->nombre,['class'=>'form-control','maxlength'=>'100']) !!}
                </div>

                <div class="form-group">
                    <label for="descripcion">Ingrese DESCRIPCIÓN</label>
                    {!! Form::textarea('descripcion',$categoria->descripcion,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    <label for="orden">Ingrese ORDEN</label>
                    {!! Form::text('orden',$categoria->orden,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    <label for="urlfoto">IMAGEN</label> <br>
                    <img src="/img/categoria/{{$categoria->urlfoto}}">
                    {!! Form::file('urlfoto') !!}
                </div>

            </div>
    
         



           
            {!! Form::submit('GUARDAR',['class'=>'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
<script>
    CKEDITOR.replace( 'descripcion' );
</script>
@endsection