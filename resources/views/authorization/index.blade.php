@extends('layouts.main');

@section('title', 'customer')

@section('content')

    <div class="container">
        <hr>
        <p>Sección de botones</p>
        <a href="{{ route('customer.create') }}">Create new customer</a>
        <hr>
    </div>
    <div class="container">
        <table class="table table-dark table-hover">
            <thead>
                <th>Placa del auto</th>
                <th>Cédula del dueño</th>
                <th>Nombre del dueño</th>
                <th>Autorizado por</th>
                <th>Tipo de Autorización</th>
                <th>Detalles</th>
                <th>Update</th>
                <th>Delete</th>
            </thead>
            <tbody>

                @foreach ($authorizations as $item)
                    <tr>
                        <td>{{ $item->vehicle->l_plate }}</td>
                        <td>{{ $item->vehicle->customer->ci }}</td>
                        <td>{{ $item->vehicle->customer->name }}</td>
                        <td>{{ $item->user->name }}</td>
                        <td>{{ $item->authorization_type }}</td>
                        <td> <a {{-- href="{{ route('customer.show', $item->id) }}" --}}>
                                <abbr title="Mostrar completa del perfil información" style="cursor: pointer">
                                    <img src="{{ asset('img/icons/detail.svg') }}" width="40px">
                                </abbr>
                            </a>
                        </td>
                        <td>
                            <a {{-- href="{{ route('customer.edit', $item->id) }}" --}}>
                                <abbr title="Editar información" style="cursor: pointer">
                                    <img src="{{ asset('img/icons/edit.svg') }}" width="40px">
                                </abbr>
                            </a>
                        </td>
                        <td>
                            <form {{-- action="{{ route('customer.destroy', $item->id) }}" method="post" --}}>
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
