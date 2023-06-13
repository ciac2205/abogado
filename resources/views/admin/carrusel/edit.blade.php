@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.submenu')
        <div class="col-sm-10">
            {!! Form::open(['route'=>['carrusel.update',$carrusel],'method'=>'PUT','files'=>true]) !!}
            <div class="jumbotron">       
                <div class="form-group">
                    <label for="descripcion">Ingrese Descripción del Carrusel</label>
                    {!! Form::text('descripcion',$carrusel->descripcion,['class'=>'form-control','maxlength'=>'67']) !!}
                </div>
                <div class="form-group">
                    <label for="link">Ingrese Link de Texto Carrusel</label>
                    {!! Form::text('link',$carrusel->link ,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label for="orden">Ingrese Orden del Carrusel</label>
                    {!! Form::text('orden',$carrusel->orden,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label for="urlfoto">Ingrese Imagen del Carrusel</label> <br>
                    <img src="/img/carrusel/{{$carrusel->urlfoto}}">
                    {!! Form::file('urlfoto') !!}
                </div>
            </div>           
            {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection