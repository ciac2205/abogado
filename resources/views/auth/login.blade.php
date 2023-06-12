@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <div class="container-login-admin">
                        <div class="container-imagen-login">
                            <img src="/img/configuracion/login2.png" alt="" />
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <h1 class="title-login">¡Bienvenido!</h1>
                            <div class="form-group row">
                            
                                <label for="email" class="col-md-4 col-form-label text-md-right">
                                    <!-- {{ __('E-Mail Address') }} -->
                                    Usuario 
                                </label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">
                                    <!-- {{ __('Password') }} -->
                                    Contraseña
                                </label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Recordar Contraseña') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Iniciar Sesión') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                    <!-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a> -->
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


<style>
    .btn-primary {
        -webkit-appearance: none;
        width: auto;
        min-width: 100px;
        border-radius: 24px;
        text-align: center;
        padding: 15px 40px;
        margin-top: 5px;
        background-color: black !important;
        color: #fff;
        font-size: 14px;
        margin-left: auto;
        font-weight: 500;
        box-shadow: 0px 2px 6px -1px rgba(0, 0, 0, 0.13);
        border: none;
        transition: all 0.3s ease;
        outline: 0;
        border: none !important;
    }

    button:hover {
        transform: translateY(-3px);
        box-shadow: 0 2px 6px -1px rgba(182, 157, 230, 0.65);
    }

    button:hover:active {
        transform: scale(0.99);
    }

    .container-login-admin {
        display: inline-flex;
        width: 100%;
        align-items: center;
    }

    .container-imagen-login img {
        width: 350px;
    }

    .card-header {
        display: none;
    }
    .form-group.row{
        display: flex;
        align-items: center;
    }
    .form-group.row label {
    width: 300px;
    color: #1a5c8d;
    font-weight: 600;
    padding: 0px;
}
a.btn.btn-link{
    padding: 0px;
    padding-top: 10px;
}
h1.title-login{
    text-align: center;
    margin-bottom: 50px;
    margin-left: 30px;
}
</style>