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
                <label for="doctype_id" class="form-label user-title-dark" style="text-align: left">
                    Document type <br>
                    <select name="doctype_id" id="doctype_id" class="form-control">
                        <option>Seleccione el tipo de documento</option>
                        @foreach ($doctypes as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </label>
                <br>

                <label for="ci" class="form-label user-title-dark">
                    Ci <br>
                    <input type="text" class="form-control" name="ci" value="{{ old('ci') }}" required placeholder="Digite el número de documento">
                </label>

                <br>
                <label for="name" class="form-label user-title-dark" style="text-align: left">
                    Name <br>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                </label>
                <br>
                <label for="lastname" class="form-label user-title-dark">
                    Lastname <br>
                    <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}">
                </label>
                <br>
                <label for="email" class="form-label user-title-dark">
                    Email <br>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                </label>
                <br>
                <label for="charge_id" class="form-label user-title-dark">
                    Charge <br>
                    <select name="charge_id" id="charge_id" class="form-control">
                        <option>Seleccione el cargo/puesto</option>
                        @foreach ($charges as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </label>
                <br>
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
            <br>
         
        </form>
    </div>
@endsection
