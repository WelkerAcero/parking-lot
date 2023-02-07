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

        <form action="{{ route('customer.update', $customer) }}" method="post" class="container">
            @csrf
            <div class="user-container-form">
                @method('put')
                <div class="user-title-form">
                    <h4 style="margin-right: 10px">Editar datos del usuario</h4>
                    <img src="{{ asset('img/icons/user-regular.svg') }}" width="25px">
                </div>

                <label for="doctype_id" class="form-label user-title-dark">
                    <b style="margin-left: 5px">Tipo de documento: </b><br>
                    <select name="doctype_id" id="doctype_id" class="form-control input-form-ancho" required>
                        @foreach ($doctypes as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </label>
                <br>
                <label for="ci" class="form-label user-title-dark">
                    <b style="margin-left: 5px">Cédula: </b><br>
                    <input type="text" class="form-control input-form-ancho" name="ci"
                        value="{{ old('ci', $customer->ci) }}" required>
                </label>
                <br>
                <label for="name" class="form-label user-title-dark">
                    <b style="margin-left: 5px">Nombre: </b><br>
                    <input type="text" class="form-control input-form-ancho" name="name"
                        value="{{ old('name', $customer->name) }}" required>
                </label>
                <br>
                <label for="lastname" class="form-label user-title-dark">
                    <b style="margin-left: 5px">Apellido: </b><br>
                    <input type="text" class="form-control input-form-ancho" name="lastname"
                        value="{{ old('lastname', $customer->lastname) }}">
                </label>
                <br>
                <label for="email" class="form-label user-title-dark">
                    <b style="margin-left: 5px">Email: </b><br>
                    <input type="email" class="form-control input-form-ancho" name="email"
                        value="{{ old('email', $customer->email) }}">
                </label>
                <br>
                <label for="charge_id" class="form-label user-title-dark">
                    <b style="margin-left: 5px">Cargo: </b><br>
                    <select name="charge_id" id="charge_id" class="form-control input-form-ancho">
                        @foreach ($charges as $item)
                            @if ($item->id === $customer->charge_id)
                                <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                            @else
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </label>
                <br>
                <button type="submit" class="btn btn-success user-btn">Editar</button>
            </div>
        </form>
    </div>

@endsection
