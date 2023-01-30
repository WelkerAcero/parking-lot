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
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="contenedor--menu__user">
                            <img src="{{ asset('img/') }}" width="110px">
                        </div>
                    </div>

                    <div>
                        <div class="contenedor--menu">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 menu-dimension">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false"> <img
                                            src="{{ asset('img/icons/') }}" width="20px">
                                        Dashboard
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false"> <img
                                            src="{{ asset('img/icons/') }}" width="20px">
                                        Usuario
                                    </a>

                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false"> <img
                                            src="{{ asset('img/icons/') }}" width="20px">
                                        Vehículos
                                    </a>

                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false"> <img
                                            src="{{ asset('img/icons/') }}" width="20px">
                                        Estacionamiento
                                    </a>
                                </li>

                                <li class="nav-item dropdown">
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button type="submit" class="navbar-brand logout">
                                            <img src="{{ asset('img/icons/logout.svg') }}" width="25px">
                                            Cerrar sesión                                            
                                        </button>
                                    </form>
                                </li>
                                <div class="menu--logo">
                                    <img src="{{ asset('img/Logo.png') }}" width="145px">
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        {{-- <div class="position-relative">
            <div class="position-absolute top-0 end-0">
                <a href="{{ route('login') }}">Sign in</a>

                <a href="#">Register</a>
            </div>
        </div> --}}




        {{-- <a href="{{ route('authorization.index', 4617583303) }}">Authorization</a> --}}


    </header>
@endsection
