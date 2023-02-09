@extends('layouts.main')

@section('title', 'Vehicles')

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
    </div>

    <div class="container">
        <table class="table table-dark table-hover">
            <thead>
                <th>Placa del vehículo</th>
                <th>Color</th>
                <th>Modelo</th>
                <th>Marca</th>
                <th>Nombre del dueño</th>
                <th>Id del dueño</th>
                <th>Tipo de motor</th>
                <th>Detalles</th>
                <th>Update</th>
                <th>Delete</th>
            </thead>
            <tbody>

                @foreach ($vehicles as $item)
                    <tr>
                        <td>{{ $item->l_plate }}</td>
                        <td>{{ $item->color }}</td>
                        <td>{{ $item->model }}</td>
                        <td>{{ $item->brand }}</td>
                        <td>{{ $item->customer->name }}</td>
                        <td>{{ $item->customer->ci }}</td>
                        <td>{{ $item->engine->name }}</td>
                        <td> <a {{-- href="{{ route('', $item->id) }}" --}}>
                                <abbr title="Mostrar completa del perfil información" style="cursor: pointer">
                                    <img src="{{ asset('img/icons/detail.svg') }}" width="40px">
                                </abbr>
                            </a>
                        </td>
                        <td>
                            <a {{-- href="{{ route('', $item->id) }}" --}}>
                                <abbr title="Editar información" style="cursor: pointer">
                                    <img src="{{ asset('img/icons/edit.svg') }}" width="40px">
                                </abbr>
                            </a>
                        </td>
                        <td>
                            <form {{-- action="{{ route('', $item->id) }}" --}} method="post">
                                @csrf
                                @method('delete')
                                <button type="submit">
                                    <abbr title="Eliminar información" style="cursor: pointer">
                                        <img src="{{ asset('img/icons/delete.svg') }}" width="40px">
                                    </abbr>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
