@extends('layouts.appfront')

@section('content')
<div class="container bg-light">
<div class="section-header">
            <h2 class="title-servicios" id="container-title-servicios">Servicios</h2>
        </div>
    <div class="blog blog-page mt-125" id="contenedor-blog-general">
                @foreach ($posts as $r)
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="/img/post/{{$r->urlfoto}}" class="img-fluid mx-auto d-block">
                        </div>
                        <div class="blog-content">
                            <h2 class="blog-title">{{$r->nombre}}</h2>
                            <div class="blog-text">
                                <p>
                                    {{$r->description}}
                                </p>
                                <a class="btn" href="/servicios/{{$r->slug}}">Ver más</a>
                            
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    <!-- Blog End -->
</div>
<style>
    .timeline {
        margin-top: 60px;
    }

    .timeline::before {
        content: '';
        position: absolute;
        left: 50%;
        width: 2px;
        height: 100%;
        background: black;
    }

    .timeline ul {
        margin: 0;
        padding: 0
    }

    .timeline ul li {
        list-style: none;
        position: relative;
        width: 50%;
        padding: 40px;
        box-sizing: border-box;
    }

    .timeline ul li:nth-child(odd) {
        float: left;
        text-align: right;
        clear: both;

    }

    .timeline ul li:nth-child(even) {
        float: right;
        text-align: left;
        clear: both;

    }

    .timeline ul li:nth-child(odd)::before {
        content: '';
        position: absolute;
        top: 40px;
        right: -10px;
        width: 20px;
        height: 20px;
        background: black;
        border-radius: 50%;
    }

    .timeline ul li:nth-child(even)::before {
        content: '';
        position: absolute;
        top: 40px;
        left: -10px;
        width: 20px;
        height: 20px;
        background: black;
        border-radius: 50%;
    }
</style>
@endsection