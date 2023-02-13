@extends('layouts.main')

@section('title', 'Customer')

@section('content')

    <div class="container">
        <div class="user-buttons">
            <h2 style="margin-right: 20px">Módulo usuario</h2>
            <img src="{{ asset('img/icons/user-regular.svg') }}" width="30px">
        </div>

        <x-button>
            <x-slot name="type">customer</x-slot>
            <x-slot name="add">Agregar Cliente</x-slot>
            <x-slot name="list">Listar Clientes</x-slot>
        </x-button>

        <div class="user-container-form">

            <div class="user-title-form">
                <h4 style="margin-right: 10px">Editar datos del usuario</h4>
                <img src="{{ asset('img/icons/user-regular.svg') }}" width="25px">
            </div>
            <form method="post" action="{{ route('customer.update', $customer) }}" class="container">
                @csrf
                @method('put')
                @include('customer.form-fields')
                <div class="user-btn-container">
                    
                    <button type="submit" class="btn btn-success user-btn">Editar</button>
                </div>
        </div>
        </form>
    </div>

@endsection
