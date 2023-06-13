@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.submenu')
        <div class="col-sm-10">

            {!! Form::open(['route'=>['empresa.update',$empresa],'method'=>'PUT','files'=>true]) !!}

            <div class="jumbotron">
                <div class="form-group">
                    <label for="title">Ingrese Título</label>
                    {!! Form::text('title',$empresa->title,['class'=>'form-control','maxlength'=>'67']) !!}
                </div>
                <div class="form-group">
                    <label for="description">Ingrese Descripción</label>
                    {!! Form::textarea('description',$empresa->description,['class'=>'form-control','maxlength'=>'155','rows'=>'3']) !!}
                </div>

                <div class="form-group">
                    <label for="somos">Ingrese texto Quienes Somos</label>
                    {!! Form::textarea('somos',$empresa->somos,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label for="urlsomos">Ingrese Imagen Quienes Somos</label> <br>
                    <img src="/img/empresa/{{$empresa->urlsomos}}">
                    {!! Form::file('urlsomos') !!}
                </div>

                <div class="form-group">
                    <label for="historia">Ingrese Texto Objetivos </label>
                    {!! Form::textarea('historia',$empresa->historia,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label for="urlhistoria">Ingrese Imagen Objetivos </label> <br>
                    <img src="/img/empresa/{{$empresa->urlhistoria}}">
                    {!! Form::file('urlhistoria') !!}
                </div>

                <div class="form-group">
                    <label for="mision">Ingreso Texto Misión</label>
                    {!! Form::textarea('mision',$empresa->mision,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label for="urlmision">Ingrese Imagen Misión</label> <br>
                    <img src="/img/empresa/{{$empresa->urlmision}}">
                    {!! Form::file('urlmision') !!}
                </div>


                <div class="form-group">
                    <label for="vision">Ingrese Texto Visión</label>
                    {!! Form::textarea('vision',$empresa->vision,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label for="urlvision">Ingrese Imagen Visión</label> <br>
                    <img src="/img/empresa/{{$empresa->urlvision}}">
                    {!! Form::file('urlvision') !!}
                </div>

                <div class="form-group">
                    <label for="valores">Ingrese Texto Valores</label>
                    {!! Form::textarea('valores',$empresa->valores,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label for="urlvalores">Ingrese Imagen Valores</label> <br>
                    <img src="/img/empresa/{{$empresa->urlvalores}}">
                    {!! Form::file('urlvalores') !!}
                </div>
            </div>
            {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection