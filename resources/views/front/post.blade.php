@extends('layouts.appfront')

@section('content')
<div class="container-principal"></div>
<div class="container-fluid p-0">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @forelse ($carrusel as $item)
            <li data-target="#carouselExampleCaptions" data-slide-to="{{$item->orden}}" class="@if($loop->index==0) active @endif"></li>
            @empty
            @endforelse
        </ol>
        <div class="carousel-inner">
        @forelse ($carrusel as $item)
          <div id="img-container-carrusel"class="carousel-item @if($loop->index==0) active @endif">
            <img src="/img/carrusel/{{$item->urlfoto}}" class="d-block w-100" alt="{{$item->frase}}">
            <div class="carousel-caption d-none d-md-block pb-5">
                <h5 id="text-carrusel">{{$item->descripcion}}</h5>
                <a href="{{$item->link}}" class="btn btn-danger">VER MÁS</a>
            </div>
          </div>
        @empty
        @endforelse
          
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

</div>

<div class="container bg-light pb-5">
    
    <div class="row">
        <h1 class="container-post-name">{{$post->nombre}}</h1>
        <div class="container-post-desglose">
            <div class="col-md-6"  id="container-text-desglose">
                <img  id="container-text-desglose-img" src="/img/post/{{$post->urlfoto}}" class="img-fluid mx-auto d-block">
            </div>
            <div class="col-md-6" id="container-text-desglose">
                <p> {!!$post->descripcion!!}
                <p>
            </div>

        </div>
    </div>
</div>
@endsection