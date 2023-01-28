@extends('layouts.template')

@section('title', 'Login')

@section('content')
    <div class="container-main-login">
        {{-- PART LEFT --}}
        <div class="login-part-left">
            <img src="{{ asset('img/Logo.png') }}" width="150px">
            <h1 class="login-left-title">SISTEMA DE CONTROL DE ACCESO</h1>
            <img src="{{ asset('img/icons/car-side-solid.svg') }}" width="50px">

            <form action="" method="post"> <br>
                <input class="form-control" type="email" id="email" name="email"
                    placeholder="Escriba su correo" /><br>

                <input type="password" class="form-control" id="password" name="password"
                    placeholder="Escriba su contraseña" /><br><br>

                <button class="form-control login-left-btn" type="submit">Acceder</button>
            </form>
        </div>

        {{-- PART RIGHT --}}
        <div class="login-part-right">
            <img class="login-img-right" src="{{ asset('img/parking.jpg') }}">
        </div>
    </div>
@endsection
