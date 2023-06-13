@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.submenu')
        <div class="col-sm-10">

            {!! Form::open(['route'=>['carrusel.store'],'method'=>'POST','files'=>true]) !!}

            <div class="jumbotron">
               


                <div class="form-group">
                    <label for="descripcion">Ingrese Descripción del Carrusel</label>
                    {!! Form::text('descripcion',null ,['class'=>'form-control','maxlength'=>'67']) !!}
                </div>

                <div class="form-group">
                    <label for="link">Ingrese Link del  Carrusel</label>
                    {!! Form::text('link',null ,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    <label for="orden">Ingrese Orden del Carrusel</label>
                    {!! Form::text('orden',null ,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    <label for="urlfoto">Ingrese Imagen  Carrusel</label> <br>
                    <img src="/img/carrusel/foto.jpg">
                    {!! Form::file('urlfoto') !!}
                </div>

            </div>
            {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection