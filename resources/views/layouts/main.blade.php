@extends('layouts.template')

@section('header')
    <header>
        <a href="{{ route('authorization.index', 4617583303) }}">Authorization</a>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="navbar-brand logout">
                Cerrar Sesión
                <img src="{{ asset('img/apagar.png') }}" width="25px">
            </button>
        </form>
    </header>
@endsection
