@extends('layouts.appfront')

@section('content')
<div class="container  pb-5">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-danger mt-5"></h1>
        </div>
        <!-- Contact Start -->
        <div class="contact mt-125">
            <div class="container">
                <div class="section-header">
                    <h2>DATOS DE CONTACTO</h2>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Dirección:</h3>
                                <p>{{$config->direccion}}</p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Celular:</h3>
                                <p>{{$config->celular}}</p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Email:</h3>
                                <p>{{$config->email}}</p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-icon">
                            <i class="fa fa-address-card" aria-hidden="true"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Razon Social:</h3>
                                <p>{{$config->razonsocial}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="contact-form">
                            <div id="success"></div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61238.5674255981!2d-71.57403109201994!3d-16.40396711205188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91424a487785b9b3%3A0xa3c4a612b9942036!2sArequipa!5e0!3m2!1ses-419!2spe!4v1605721542424!5m2!1ses-419!2spe" width="100%" class="vh-100" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
    </div>
</div>
@endsection