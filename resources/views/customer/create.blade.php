@extends('layouts.main')

@section('title', 'customer')

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
            <div class="w-50">
                <label for="">
                    Document type: <br>
                    <select name="doctype_id" id="doctype_id">
                        @foreach ($doctypes as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </label>
                <br>
                <label for="">
                    Ci: <br>
                    <input type="text" class="form-control" name="ci" value="{{ old('ci') }}" required>
                </label>
                <br>
                <label for="">
                    Name: <br>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                </label>
                <br>
                <label for="">
                    Lastname: <br>
                    <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}">
                </label>
                <br>
                <label for="">
                    Email: <br>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                </label>
                <br>
                <label for="">
                    Charge: <br>
                    <select name="charge_id" id="charge_id">
                        @foreach ($charges as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </label>
                <br>
            </div>
            <br>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
@endsection
