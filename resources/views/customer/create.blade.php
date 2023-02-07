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
        {{-- <a href="{{ route('customer.create') }}">Create new customer</a> --}}


        <form action="{{ route('customer.store') }}" method="post" class="container">
            @csrf
            <div class="user-container-form">
                <div class="user-title-form">
                    <h4 style="margin-right: 10px">Agregar datos del usuario</h4>
                    <img src="{{ asset('img/icons/user-regular.svg') }}" width="25px">
                </div>
                <label for="doctype_id" class="form-label user-title-dark">
                    <b style="margin-left: 5px">Tipo de documento: </b><br>
                    <select name="doctype_id" id="doctype_id" class="form-control input-form-ancho" required>
                        <option value="" disabled selected hidden>Seleccione el tipo de documento</option>
                        @foreach ($doctypes as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </label>
                <br>

                <label for="ci" class="form-label user-title-dark">
                    <b style="margin-left: 5px">Cédula:</b> <br>
                    <input type="text" class="form-control input-form-ancho" name="ci" value="{{ old('ci') }}" required
                        placeholder="Digite el número de documento">
                </label>

                <br>
                <label for="name" class="form-label user-title-dark" style="text-align: left">
                    <b style="margin-left: 5px">Nombre:</b><br>
                    <input type="text" class="form-control input-form-ancho" name="name" value="{{ old('name') }}" required
                        placeholder="Digite el nombre">
                </label>
                <br>
                <label for="lastname" class="form-label user-title-dark">
                    <b style="margin-left: 5px">Apellido:</b><br>
                    <input type="text" class="form-control input-form-ancho" name="lastname" value="{{ old('lastname') }}"
                        placeholder="Digite el apellido">
                </label>
                <br>
                <label for="email" class="form-label user-title-dark">
                    <b style="margin-left: 5px">Email:</b> <br>
                    <input type="email" class="form-control input-form-ancho" name="email" value="{{ old('email') }}"
                        placeholder="Digite el correo">
                </label>
                <br>
                <label for="charge_id" class="form-label user-title-dark">
                    <b style="margin-left: 5px">Cargo:</b> <br>
                    <select name="charge_id" id="charge_id" class="form-control input-form-ancho">
                        <option>Seleccione el cargo/puesto</option>
                        @foreach ($charges as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </label>
                <br>
                <div class="user-btn-container">
                    <button type="reset" class="btn btn-primary user-btn">Limpiar</button>
                    <button type="submit" class="btn btn-success user-btn">Guardar</button>
                </div>
            </div>
            <br>

        </form>
    </div>
@endsection
