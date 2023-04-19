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

    <div class="container table-responsive">
        <table class="table table-bordered table-dark table-striped table-hover">
            <thead class="text-center">
                <th>Placa del vehículo</th>
                <th>Color</th>
                <th>Modelo</th>
                <th>Marca</th>
                <th>Nombre del dueño</th>
                <th>Id del dueño</th>
                <th>Tipo de automóvil</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </thead>
            <tbody>

                @foreach ($vehicles as $item)
                    <tr>
                        <td>{{ $item->l_plate }}</td>
                        <td>{{ $item->color }}</td>
                        <td>{{ $item->model }}</td>
                        <td>{{ $item->brand }}</td>
                        <td>
                            @if (!empty($item->customer->name))
                                {{ $item->customer->name }}
                            @else
                                Cliente eliminado
                            @endif
                        </td>
                        <td>
                            @if (!empty($item->customer->ci))
                                {{ $item->customer->ci }}
                            @else
                                Cliente eliminado
                            @endif
                        </td>
                        <td>{{ $item->vehicle->name }}</td>

                        <td class="text-center">
                            <a href="{{ route('vehicle.edit', $item->id) }}">
                                <abbr title="Editar información" style="cursor: pointer">
                                    <img src="{{ asset('img/icons/edit.svg') }}" width="30px">
                                </abbr>
                            </a>
                        </td>
                        <td class="text-center">
                            <form action="{{ route('vehicle.destroy', $item->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="customer-icon-del">
                                    <abbr title="Eliminar información" style="cursor: pointer">
                                        <img src="{{ asset('img/icons/delete.svg') }}" width="30px">
                                    </abbr>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @foreach ($vehicles as $item)
            <h1>{{ $item->vehicle_type }}</h1>
        @endforeach

        <div class="paginator-content">
            <div class="paginator-sec mt-5">
                {{ $vehicles->links() }}
            </div>
        </div>

    </div>
@endsection
