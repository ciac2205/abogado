@extends('layouts.appfront')

@section('content')
<div class="container bg-light">

    <div id="empresa-container" class="row">
        <img src="/img/empresa/{{$empresa->urlsomos}}" class="img-fluid">

        
    </div>
    
        <div class="col-sm-12 p-5 mb-5 bg-white">
            <h2 id="subtitle-empresa">QUIENES SOMOS</h2>
            <p id="text-empresa-info">  {!! $empresa->somos !!}</p>

            <div id="container-color-empresa" class="row mt-5 mb-5 align-items-center">
                <div class="col-sm-4">
                    <img id="img-empresas" src="/img/empresa/{{$empresa->urlmision}}" class="img-fluid">
                </div>
                <div class="col-sm-8">
                    <h2 id="subtitle-empresa">MISIÓN</h2>
                    <p id="text-empresa-info"> {!! $empresa->mision !!}</p>
                </div>
            </div>

            <div class="row mt-5 mb-5 align-items-center">
                
                <div class="col-sm-8">
                    <h2 id="subtitle-empresa">VISIÓN</h2>
                 <p id="text-empresa-info">{!! $empresa->vision !!}</p> 
                </div>
                <div class="col-sm-4">
                    <img id="img-empresas" src="/img/empresa/{{$empresa->urlvision}}" class="img-fluid">
                </div>
            </div>


            <div id="container-color-empresa"  class="row mt-5 mb-5 align-items-center">
                <div class="col-sm-4">
                    <img id="img-empresas" src="/img/empresa/{{$empresa->urlhistoria}}" class="img-fluid">
                </div>
                <div class="col-sm-8">
                    <h2 id="subtitle-empresa">RESEÑA HISTÓRICA</h2>
                    <p id="text-empresa-info"> {!! $empresa->historia !!}</p>
                </div>
            </div>


            <div  class="row mt-5 mb-5 align-items-center">
                
                <div class="col-sm-8">
                    <h2 id="subtitle-empresa">VALORES CORPORATIVOS</h2>
                    <p id="text-empresa-info">{!! $empresa->valores !!}</p>
                </div>
                <div class="col-sm-4">
                    <img id="img-empresas" src="/img/empresa/{{$empresa->urlvalores}}" class="img-fluid">
                </div>
            </div>



        </div>

        


</div>
@endsection