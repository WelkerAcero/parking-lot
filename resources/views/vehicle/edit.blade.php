@extends('layouts.main')

@section('title', 'Vehicle')

@section('content')

    <div class="container">
        <div class="user-buttons">
            <h2 style="margin-right: 20px">Módulo vehículo</h2>
            <img src="{{ asset('img/icons/car-solid.svg') }}" width="30px">
        </div>

        <x-button>
            <x-slot name="type">vehicle</x-slot>
            <x-slot name="add">Agregar Vehículo</x-slot>
            <x-slot name="list">Listar Vehículos</x-slot>
        </x-button>

        <div class="user-container-form">
            <div class="user-title-form">
                <h4 style="margin-right: 10px">Editar datos del vehículo</h4>
                <img src="{{ asset('img/icons/car-solid.svg') }}" width="25px">
            </div>

            <form method="post" action="{{ route('vehicle.update', $vehicle) }}" class="container">
                @csrf
                @method('put')
                @include('vehicle.form-fields')
                <div class="user-btn-container">
                    <button type="submit" class="btn btn-success user-btn">Editar</button>
                </div>
        </div>
        </form>
    </div>
@endsection
