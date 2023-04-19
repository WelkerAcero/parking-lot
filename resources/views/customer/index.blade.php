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
    </div>

    <div class="container table-responsive">
        <table class="table table-bordered table-dark table-striped table-hover">
            <thead class="text-center">
                <th>Tipo de documento</th>
                <th>Cédula</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Cargo</th>
                <th>Detalles</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </thead>
            <tbody>

                @foreach ($customers as $item)
                    <tr>
                        <td>{{ $item->doctype->name }}</td>
                        <td>{{ $item->ci }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->lastname }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->charge->name }}</td>
                        <td class="text-center">
                            <a href="{{ route('customer.show', $item->id) }}">
                                <abbr title="Mostrar completa del perfil información" style="cursor: pointer">
                                    <img src="{{ asset('img/icons/detail.svg') }}" width="30px">
                                </abbr>
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="{{ route('customer.edit', $item->id) }}">
                                <abbr title="Editar información" style="cursor: pointer">
                                    <img src="{{ asset('img/icons/edit.svg') }}" width="30px">
                                </abbr>
                            </a>
                        </td>
                        <td class="text-center">
                            <form action="{{ route('customer.destroy', $item->id) }}" method="post">
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

        <div class="paginator-content">
            <div class="paginator-sec mt-5">
                {{ $customers->links() }}
            </div>
        </div>
    </div>
@endsection
