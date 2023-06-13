<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', $config->seo_title)</title>
    <meta name="description" content="@yield('description', $config->seo_description)">
    <meta property="og:type" content="website" />
    <meta property="og:description" content="@yield('description',  $config->seo_description)" />
    <meta property="og:url" content="@yield('url','https://bufete.com')" />
    <meta property="og:site_name" content="bufete.com" />
    <meta property="og:image" content="@yield('image','https://bufete.com/img/configuracion/'.$config->seo_urlfoto)" />
    <link rel="canonical" href="@yield('url','https://bufete.com')" />
    <link rel="shortcut icon" href="/img/configuracion/{{$config->urlfavicon}}" type="image/png" />
    <link rel="stylesheet" href="../../../public/css/principal.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
  
</head>

<body class="bg-ligth">

    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm " id="navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="/img/configuracion/{{$config->urllogo}}" alt="Logo Artesanías" width="150">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="/" title="Portada">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/empresa" title="QuienesSomos">Quienes Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/servicios" title="Últimas publicaciones">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contacto" title="Datos contacto">Contacto</a>
                    </li>
                </ul>


            </div>
        </div>
    </nav>

    @yield('content')
</body>
<!-- Footer Start -->
<div class="footer">
    <div class="container">
        <div class="footer-contact">
            <h2>Secciones</h2>
            <a class="nav-link" href="/" title="Portada">Inicio</a>
            <a class="nav-link" href="/empresa" title="QuienesSomos">Quienes Somos</a>
            <a class="nav-link" href="/servicios" title="Últimas publicaciones">Servicios</a>
            <a class="nav-link" href="/contacto" title="Datos contacto">Contacto</a>
        </div>
        <div class="footer-link">
            <h2>Ubicación</h2>
            <p>{{$config->direccion}}</p>
        </div>
        <div class="footer-social">
            <h2>Redes Sociales</h2>
            <!-- <a href=""><i class="fab fa-twitter"></i></a> -->
            <a href="{{$config->facebook}}"><i class="fab fa-facebook-f"></i></a>
            <a href="{{$config->youtube}}"><i class="fab fa-youtube"></i></a>
            <!-- <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-linkedin-in"></i></a> -->
        </div>
    </div>
</div>
<div class="container copyright">
    <div class="container-copy">
        <p>&copy;All Right Reserved.</p>
    </div>
</div>
</div>
<!-- Footer End -->

</html>
