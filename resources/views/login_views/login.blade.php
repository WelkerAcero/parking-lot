@extends('layouts.template')

@section('title', 'Login')

@section('content')
    <div class="container-main-login">
        {{-- PART LEFT --}}
        <div class="login-part-left">
            <img src="{{ asset('img/Logo.png') }}" width="150px">
            <h1 class="login-left-title">SISTEMA DE CONTROL DE ACCESO</h1>
            <img src="{{ asset('img/icons/car-side-solid.svg') }}" width="50px">

            <div>
                <p style="color: red; text-align:center;">{{ $msgErr ?? '' }}</p>
            </div>

            <form action="{{ route('validate.user') }}" method="post"> <br>
                @csrf
                <div>
                    <label for="email" style="color:white">Email</label>
                    <input class="form-control" type="email" id="email" name="email"
                        placeholder="Escriba su correo" />
                    @error('email')
                        <p style="color: red">{{ $message }}</p>
                    @enderror
                </div>
                <br>
                <div>
                    <label for="password" style="color:white">Password</label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Escriba su contraseña" /><br>
                    @error('password')
                        <p style="color: red">{{ $message }}</p>
                    @enderror
                </div>
                <br>
                <button class="form-control login-left-btn" type="submit">Acceder</button>
            </form>
        </div>

        {{-- PART RIGHT --}}
        <div class="login-part-right">
            <img class="login-img-right" src="{{ asset('img/parking.jpg') }}">
        </div>
    </div>
@endsection
