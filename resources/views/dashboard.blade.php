@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
    <h1>Welcome to dashboard <strong>{{ session('authenticated') }}</strong></h1>
    <div class="container-dashboard">
        <div>
            <div style="display: flex">
                <h1><b>Parqueadero privado UTS</b></h1>
                <img src="{{ asset('img/icons/house-solid.svg') }}" width="30px">
            </div>
            <p>Sistema para el control de acceso y salida vehicular para el estacionamiento de las Unidades Tecnológicas de
                Santander</p>
            <hr>
        </div>
        {{-- MÓDULOS --}}
        <div>
            {{-- MÓDULO USER --}}
            <div>
                <div>
                    <div class="dashboard-icon-bg">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="30px">
                            <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path class="dashboard-icon"
                                d="M272 304h-96C78.8 304 0 382.8 0 480c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32C448 382.8 369.2 304 272 304zM48.99 464C56.89 400.9 110.8 352 176 352h96c65.16 0 119.1 48.95 127 112H48.99zM224 256c70.69 0 128-57.31 128-128c0-70.69-57.31-128-128-128S96 57.31 96 128C96 198.7 153.3 256 224 256zM224 48c44.11 0 80 35.89 80 80c0 44.11-35.89 80-80 80S144 172.1 144 128C144 83.89 179.9 48 224 48z" />
                        </svg>
                    </div>
                    <h2><b>Gestionar usuarios</b></h2>
                </div>
                <div>
                    <h3><a href="#">Ir a módulo de usuarios</a></h3>
                    <img src="{{ asset('img/icons/enter.svg') }}" width="30px">
                </div>
            </div>
            {{-- MÓDULO VEHICLES --}}
        </div>
    </div>
@endsection
