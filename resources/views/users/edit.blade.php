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
            <x-slot name="add">Agregar Usuarios</x-slot>
            <x-slot name="list">Listar Usuarios</x-slot>
        </x-button>

        <div class="user-container-form">

            <div class="user-title-form">
                <h4 style="margin-right: 10px">Editar datos del usuario</h4>
                <img src="{{ asset('img/icons/user-regular.svg') }}" width="25px">
            </div>
            <form method="post" action="{{ route('user.update', $user) }}" class="container">
                @csrf
                @method('put')
                @include('users.form-fields')
                <div class="user-btn-container">

                    <button type="submit" class="btn btn-success user-btn">Editar</button>
                </div>
        </div>
        </form>
    </div>

@endsection
