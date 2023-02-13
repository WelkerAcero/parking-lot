@extends('layouts.main')

@section('title', 'Control acceso/salida')

@section('content')

    <div class="container">
        <div class="user-buttons">
            <h2 style="margin-right: 20px"><b>Lista de autorizaciones realizadas</b></h2>
            <img src="{{ asset('img/icons/square-parking-solid.svg') }}" width="30px">
        </div>
    </div>
    <div class="container">
        <form action="{{ route('authorization.filter') }}" method="post">
            @csrf
            <div class="filter mb-3 w-50">
                <div class="me-2">
                    <label for="search"><b style="font-size: 22px">Cédula del cliente</b><br>
                        <input type="text" name="filterData" placeholder="Escriba cédula del cliente">
                    </label>
                </div>
                <button type="submit" class="btn btn-success">Buscar</button>
            </div>
        </form>
        <table class="table table-dark table-hover">
            <thead>
                <th>Placa del auto</th>
                <th>Cédula del dueño</th>
                <th>Nombre del dueño</th>
                <th>Autorizado por</th>
                <th>Tipo de Autorización</th>
                <th>Fecha de Autorización</th>
            </thead>
            <tbody>

                @foreach ($authorizations as $item)
                    <tr>
                        <td>{{ $item->vehicle->l_plate }}</td>
                        <td>{{ $item->vehicle->customer->ci }}</td>
                        <td>{{ $item->vehicle->customer->name }}</td>
                        <td>{{ $item->user->name }}</td>
                        <td>{{ $item->authorization_type }}</td>
                        <td>{{ $item->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
