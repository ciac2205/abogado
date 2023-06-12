@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.submenu')
        <div class="col-sm-10">
            {!! Form::open(['route'=>['configuracion.update',$registro],'method'=>'PUT','files'=>true]) !!}
            <div class="jumbotron">
                <div class="container-configuracion-admin">
                    <div class="form-group">
                        <label for="seo_title">Ingrese Título Etiqueta SEO</label>
                        {!! Form::text('seo_title',$registro->seo_title,['class'=>'form-control','maxlength'=>'67']) !!}
                    </div>
                    <div class="form-group">
                        <label for="seo_description">Ingrese Descripción de SEO</label>
                        {!! Form::textarea('seo_description',$registro->seo_description,['class'=>'form-control','maxlength'=>'155','rows'=>'3']) !!}
                    </div>
                    <div class="form-group">
                        <label for="seo_urlfoto">Imagen de SEO</label> <br>
                        <img src="/img/configuracion/{{$registro->seo_urlfoto}}">
                        {!! Form::file('seo_urlfoto') !!}
                    </div>
                    <div class="form-group">
                        <label for="urlfavicon">Ingrese Icon SEO</label> <br>
                        <img src="/img/configuracion/{{$registro->urlfavicon}}">
                        {!! Form::file('urlfavicon') !!}
                    </div>
                    <div class="form-group">
                        <label for="urllogo">Logo de Navbar</label> <br>
                        <img src="/img/configuracion/{{$registro->urllogo}}">
                        {!! Form::file('urllogo') !!}
                    </div>
                    <!-- <div class="form-group row">
                <div class="col-sm-3">
                    <label for="colorPrimario">COLOR PRIMARIO</label>
                    {!! Form::text('colorPrimario',$registro->colorPrimario,['class'=>'form-control','maxlength'=>'7']) !!}
                </div> -->
                    <!-- <div class="col-sm-3">
                    <label for="colorSecundario">COLOR SECUNDARIO</label>
                    {!! Form::text('colorSecundario',$registro->colorSecundario,['class'=>'form-control','maxlength'=>'7']) !!}
                </div> -->
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="slogan">Frase Principal en Homepage</label>
                            {!! Form::text('slogan',$registro->slogan,['class'=>'form-control','maxlength'=>'100']) !!}
                        </div>
                        <div class="col-sm-6">
                            <label for="frase_1">Frase 1</label>
                            {!! Form::text('frase_1',$registro->frase_1,['class'=>'form-control','maxlength'=>'50']) !!}
                        </div>
                        <div class="col-sm-6">
                            <label for="frase_2">Frase 2</label>
                            {!! Form::text('frase_2',$registro->frase_2,['class'=>'form-control','maxlength'=>'50']) !!}
                        </div>
                        <div class="col-sm-6">
                            <label for="frase_3">Frase 3</label>
                            {!! Form::text('frase_3',$registro->frase_3,['class'=>'form-control','maxlength'=>'50']) !!}
                        </div>
                        <div class="col-sm-6">
                            <label for="frase_4">Frase 4</label>
                            {!! Form::text('frase_4',$registro->frase_4,['class'=>'form-control','maxlength'=>'50']) !!}
                        </div>
                    </div>
                    <div class="form-group row">

                        <div class="col-sm-3">
                            <label for="razonsocial">Razon Social</label>
                            {!! Form::text('razonsocial',$registro->razonsocial,['class'=>'form-control','maxlength'=>'50']) !!}
                        </div>
                        <div class="col-sm-3">
                            <label for="direccion">Direccion</label>
                            {!! Form::text('direccion',$registro->direccion,['class'=>'form-control','maxlength'=>'50']) !!}
                        </div>

                        <div class="col-sm-3">
                            <label for="celular">Celular</label>
                            {!! Form::text('celular',$registro->celular,['class'=>'form-control','maxlength'=>'50']) !!}
                        </div>
                        <div class="col-sm-3">
                            <label for="email">Email</label>
                            {!! Form::text('email',$registro->email,['class'=>'form-control','maxlength'=>'50']) !!}
                        </div>
                        <div class="col-sm-3">
                            <label for="facebook">Facebook</label>
                            {!! Form::text('facebook',$registro->facebook,['class'=>'form-control','maxlength'=>'50']) !!}
                        </div>
                        <div class="col-sm-3">
                            <label for="youtube">YouTube</label>
                            {!! Form::text('youtube',$registro->youtube,['class'=>'form-control','maxlength'=>'50']) !!}
                        </div>
                    </div>
                    {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection