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


        <form action="{{ route('vehicle.store') }}" method="post" class="container">
            @csrf
            <div class="user-container-form">
                <div class="user-title-form">
                    <h4 style="margin-right: 10px">Agregar datos del vehículo</h4>
                    <img src="{{ asset('img/icons/car-solid.svg') }}" width="25px">
                </div>

                <label for="l_plate" class="form-label user-title-dark">
                    <b style="margin-left: 5px">Placa:</b> <br>
                    <input type="text" class="form-control input-form-ancho" name="l_plate" value="{{ old('l_plate') }}"
                        required placeholder="Digite la placa">
                </label>

               
                <label for="color" class="form-label user-title-dark" style="text-align: left">
                    <b style="margin-left: 5px">Color:</b><br>
                    <input type="text" class="form-control input-form-ancho" name="color" value="{{ old('color') }}"
                        required placeholder="Digite el color">
                </label>
             
                <label for="model" class="form-label user-title-dark" style="text-align: left">
                    <b style="margin-left: 5px">Modelo:</b><br>
                    <input type="number" class="form-control input-form-ancho" name="model" value="{{ old('model') }}"
                        min="1950" max="2023" required placeholder="Digite el modelo">
                </label>
               
                <label for="brand" class="form-label user-title-dark" style="text-align: left">
                    <b style="margin-left: 5px">Marca:</b><br>
                    <input type="text" class="form-control input-form-ancho" name="brand" value="{{ old('brand') }}"
                        required placeholder="Digite la marca">
                </label>
               

                <label for="customer_id" class="form-label user-title-dark">
                    <b style="margin-left: 5px">Propietario: </b><br>
                    <select name="customer_id" id="customer_id" class="form-control input-form-ancho" required>
                        <option value="" disabled selected hidden>Seleccione el propietario</option>
                        @foreach ($owner as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </label>               
              
                <label for="engine_id" class="form-label user-title-dark">
                    <b style="margin-left: 5px">Motor: </b><br>
                    <select name="engine_id" id="engine_id" class="form-control input-form-ancho" required>
                        <option value="" disabled selected hidden>Seleccione el tipo de motor</option>
                        @foreach ($engines as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </label>
                
                <div class="user-btn-container">
                    <button type="reset" class="btn btn-primary user-btn">Limpiar</button>
                    <button type="submit" class="btn btn-success user-btn">Guardar</button>
                </div>
            </div>
            <br>

        </form>
    </div>
@endsection
