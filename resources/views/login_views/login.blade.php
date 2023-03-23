@extends('layouts.template')

@section('title', 'Login')

@section('content')
    <div class="container-main-login">
        <div class="container-login">

            {{-- PART LEFT --}}
            <div class="login-part-left">

                <img src="{{ asset('img/Logo.png') }}" width="150px">
                <h1 class="login-left-title"><b>SISTEMA DE CONTROL DE ACCESO</b></h1>
                <img src="{{ asset('img/icons/car-side-solid.svg') }}" width="50px">


                <div class="login-contain-form">
                    <p class="login-error">{{ $msgErr ?? '' }}</p>
                    <p class="login-error">{{ $status ?? '' }}</p>
                </div>

                <form action="{{ route('validate.user') }}" method="post">
                    <h2 class="login-form-text mt-5">Por favor ingrese sus credenciales</h2>
                    @csrf
                    <div class="login-contain-form">
                        <label class="login-form" for="email" style="color:white">Email</label>
                        <input class="form-control" type="email" id="email" name="email"
                            placeholder="Escriba su correo" />
                        @error('email')
                            <p class="login-error">{{ $message }}</p>
                        @enderror
                    </div>
                    <br>
                    <div class="login-contain-form">
                        <label class="login-form" for="password" style="color:white">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Escriba su contraseña" />
                        @error('password')
                            <p class="login-error">{{ $message }}</p>
                        @enderror
                    </div>
                    <br>
                    <button class="form-control login-left-btn" type="submit">Acceder</button>
                </form>
                <p class="text-white mt-3">¿Has olvidado tu contraseña? <br>
                    <a href="{{ route('pass.request') }}">Click aquí</a>
                </p>
            </div>

            {{-- PART RIGHT --}}
            <div class="login-part-right">
                <img class="login-img-right" src="{{ asset('img/parking.jpg') }}">
            </div>

        </div>
    </div>
@endsection
