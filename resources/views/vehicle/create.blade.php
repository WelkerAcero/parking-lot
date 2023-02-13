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
        {{-- <a href="{{ route('customer.create') }}">Create new customer</a> --}}

        <div class="user-container-form">
            <div class="user-title-form">
                <h4 style="margin-right: 10px">Agregar datos del vehículo</h4>
                <img src="{{ asset('img/icons/car-solid.svg') }}" width="25px">
            </div>

            <form action="{{ route('vehicle.store') }}" method="post" class="container">
                @csrf
                @include('vehicle.form-fields')
                <div class="user-btn-container">
                    <button type="reset" class="btn btn-primary user-btn">Limpiar</button>
                    <button type="submit" class="btn btn-success user-btn">Guardar</button>
                </div>
        </div>
        </form>
    </div>
@endsection
