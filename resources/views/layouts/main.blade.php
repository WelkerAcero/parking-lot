@extends('layouts.template')

@section('title', 'Menu')

@section('header')
    <header>
        <nav class="navbar bg-light fixed-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                    aria-controls="offcanvasNavbar" style="color: var(--fourth)">
                    Menú <span class="navbar-toggler-icon"></span>
                </button>

                <div class="button_session me-4">
                    <div>
                        <a class="navbar-brand" href="{{ route('admin.dashboard') }}">ADMINISTRADOR</a>
                    </div>
                </div>

                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="contenedor--menu__up">
                        <div class="offcanvas-header">
                            <br>
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel" style="color: var(--fourth)"><b>MENÚ</b>
                            </h5>
                            <button type="button" data-bs-dismiss="offcanvas" aria-label="Close"
                                style="background: none;border:none;"><img src="{{ asset('img/icons/close.svg') }}"
                                    width="30px"></button>
                        </div>
                    </div>

                    <div>
                        <div class="contenedor--menu">
                            <ul class="navbar-nav justify-content-end flex-grow-1 p-4 menu-dimension">
                                <li class="nav-item dropdown">
                                    <a class="nav-link menu-text" href="{{ route('admin.dashboard') }}" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">

                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="30px">
                                            <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                            <path class="menu-icons"
                                                d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                                        </svg>
                                        Dashboard
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link menu-text" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="30px">
                                            <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                            <path class="menu-icons"
                                                d="M272 304h-96C78.8 304 0 382.8 0 480c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32C448 382.8 369.2 304 272 304zM48.99 464C56.89 400.9 110.8 352 176 352h96c65.16 0 119.1 48.95 127 112H48.99zM224 256c70.69 0 128-57.31 128-128c0-70.69-57.31-128-128-128S96 57.31 96 128C96 198.7 153.3 256 224 256zM224 48c44.11 0 80 35.89 80 80c0 44.11-35.89 80-80 80S144 172.1 144 128C144 83.89 179.9 48 224 48z" />
                                        </svg>
                                        Usuario
                                    </a>

                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link menu-text" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="30px">
                                            <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                            <path class="menu-icons"
                                                d="M135.2 117.4L109.1 192H402.9l-26.1-74.6C372.3 104.6 360.2 96 346.6 96H165.4c-13.6 0-25.7 8.6-30.2 21.4zM39.6 196.8L74.8 96.3C88.3 57.8 124.6 32 165.4 32H346.6c40.8 0 77.1 25.8 90.6 64.3l35.2 100.5c23.2 9.6 39.6 32.5 39.6 59.2V400v48c0 17.7-14.3 32-32 32H448c-17.7 0-32-14.3-32-32V400H96v48c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V400 256c0-26.7 16.4-49.6 39.6-59.2zM128 288c0-17.7-14.3-32-32-32s-32 14.3-32 32s14.3 32 32 32s32-14.3 32-32zm288 32c17.7 0 32-14.3 32-32s-14.3-32-32-32s-32 14.3-32 32s14.3 32 32 32z" />
                                        </svg>
                                        Vehículos
                                    </a>

                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link menu-text" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="30px">
                                            <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                            <path class="menu-icons"
                                                d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM192 256h48c17.7 0 32-14.3 32-32s-14.3-32-32-32H192v64zm48 64H192v32c0 17.7-14.3 32-32 32s-32-14.3-32-32V288 168c0-22.1 17.9-40 40-40h72c53 0 96 43 96 96s-43 96-96 96z" />
                                        </svg>
                                        Estacionamiento
                                    </a>
                                </li>

                                <div style="position: absolute;bottom:0;width: 85%">
                                    <li class="nav-item dropdown">
                                        <form action="{{ route('logout') }}" method="post">
                                            @csrf
                                            <button type="submit" class="navbar-brand logout menu-text">
                                                <img src="{{ asset('img/icons/salir.png') }}" width="25px">
                                                Cerrar sesión
                                            </button>
                                        </form>
                                    </li>
                                    <div class="menu-logo">
                                        <img src="{{ asset('img/Logo.png') }}" width="145px">
                                    </div>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        {{-- <a href="{{ route('authorization.index', 4617583303) }}">Authorization</a> --}}
    </header>
@endsection
