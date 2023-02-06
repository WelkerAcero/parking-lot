@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

    <div class="container-dashboard">
        <h1 class="dashboard-text-sup">Bienvenido a dashboard <strong>{{ session('authenticated') }}</strong></h1><br>
        <div>
            <div style="display: flex">
                <h1 class="dashboard-text-sup" style="margin-right: 15px"><b>Parqueadero privado UTS</b></h1>
                <img src="{{ asset('img/icons/house-solid.svg') }}" width="37px">
            </div><br>
            <h2 class="dashboard-text-sup" style="text-align: justify">Sistema para el control de acceso y salida vehicular
                para el estacionamiento de
                las Unidades Tecnológicas de
                Santander</h2><br>
            <hr>
        </div>

        {{-- MÓDULOS --}}
        <div class="container-modules">
            {{-- MÓDULO USER --}}
            <div class="dashboard-module">
                <a href="{{ route('customer.index') }}" class="dashboard-module-href">
                    <div class="module-top">
                        <div class="dashboard-icon-bg">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="35px">
                                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path class="dashboard-icon"
                                    d="M272 304h-96C78.8 304 0 382.8 0 480c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32C448 382.8 369.2 304 272 304zM48.99 464C56.89 400.9 110.8 352 176 352h96c65.16 0 119.1 48.95 127 112H48.99zM224 256c70.69 0 128-57.31 128-128c0-70.69-57.31-128-128-128S96 57.31 96 128C96 198.7 153.3 256 224 256zM224 48c44.11 0 80 35.89 80 80c0 44.11-35.89 80-80 80S144 172.1 144 128C144 83.89 179.9 48 224 48z" />
                            </svg>
                        </div>
                        <h3 class="module-top-text"><b>Gestionar personas</b></h3>
                    </div>
                    <div class="module-bottom-text">
                        <h4 style="margin-right: 23px">Ir a módulo de personas</h4>
                        <img class="dash-icon-acceder" src="{{ asset('img/icons/enter.svg') }}" width="18px">
                    </div>
                </a>
            </div>
            {{-- MÓDULO VEHICLES --}}
            <div class="dashboard-module">
                <a href="{{ route('vehicle.index') }}" class="dashboard-module-href">
                    <div class="module-top">
                        <div class="dashboard-icon-bg">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="35px">
                                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path class="dashboard-icon"
                                    d="M135.2 117.4L109.1 192H402.9l-26.1-74.6C372.3 104.6 360.2 96 346.6 96H165.4c-13.6 0-25.7 8.6-30.2 21.4zM39.6 196.8L74.8 96.3C88.3 57.8 124.6 32 165.4 32H346.6c40.8 0 77.1 25.8 90.6 64.3l35.2 100.5c23.2 9.6 39.6 32.5 39.6 59.2V400v48c0 17.7-14.3 32-32 32H448c-17.7 0-32-14.3-32-32V400H96v48c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V400 256c0-26.7 16.4-49.6 39.6-59.2zM128 288c0-17.7-14.3-32-32-32s-32 14.3-32 32s14.3 32 32 32s32-14.3 32-32zm288 32c17.7 0 32-14.3 32-32s-14.3-32-32-32s-32 14.3-32 32s14.3 32 32 32z" />
                            </svg>
                        </div>
                        <h3 class="module-top-text"><b>Gestionar vehículos</b></h3>
                    </div>
                    <div class="module-bottom-text" style="">
                        <h4 style="margin-right: 23px">Ir a módulo de vehículos</h4>
                        <img class="dash-icon-acceder" src="{{ asset('img/icons/enter.svg') }}" width="18px">
                    </div>
                </a>
            </div>
            {{-- MÓDULO ESTACIONAMIENTO --}}
            <div class="dashboard-module">
                <a href="{{ route('authorization.index') }}" class="dashboard-module-href">
                    <div class="module-top">
                        <div class="dashboard-icon-bg">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="35px">
                                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path class="dashboard-icon"
                                    d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM192 256h48c17.7 0 32-14.3 32-32s-14.3-32-32-32H192v64zm48 64H192v32c0 17.7-14.3 32-32 32s-32-14.3-32-32V288 168c0-22.1 17.9-40 40-40h72c53 0 96 43 96 96s-43 96-96 96z" />
                            </svg>
                        </div>
                        <h3 class="module-top-text"><b>Control de accesos/salidas</b></h3>
                    </div>
                    <div class="module-bottom-text">
                        <h4 style="margin-right: 23px">Ir a módulo de estacionamiento</h4>
                        <img class="dash-icon-acceder" src="{{ asset('img/icons/enter.svg') }}" width="18px">
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
