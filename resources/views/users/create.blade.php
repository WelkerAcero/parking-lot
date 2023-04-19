@extends('layouts.main')

@section('title', 'Customer')

@section('content')

    <div class="container">
        <div class="user-buttons">
            <h2 style="margin-right: 20px">Módulo usuario</h2>
            <img src="{{ asset('img/icons/user-regular.svg') }}" width="30px">
        </div>

        <x-button>
            <x-slot name="type">user</x-slot>
            <x-slot name="add">Agregar Usuario</x-slot>
            <x-slot name="list">Listar Usuario</x-slot>
        </x-button>

        <div class="user-container-form">
            <div class="user-title-form">
                <h4 style="margin-right: 10px">Agregar datos del usuario</h4>
                <img src="{{ asset('img/icons/user-regular.svg') }}" width="25px">
            </div>
            <form action="{{ route('user.store') }}" method="post" class="container">
                @csrf
                @include('users.form-fields')

                <div class="user-btn-container">
                    <button type="reset" class="btn btn-primary user-btn">Limpiar</button>
                    <button type="submit" class="btn btn-success user-btn">Guardar</button>
                </div>
        </div>
        </form>
    </div>
@endsection
