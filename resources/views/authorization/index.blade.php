@extends('layouts.main')

@section('title', 'customer')

@section('content')

    <div class="container">
        <hr>
        <h1>Lista de autorizaciones realizadas</h1>
        <hr>
    </div>
    <div class="container">
        <form action="{{ route('authorization.filter') }}" method="post">
            @csrf
            <div class="filter mb-3 w-50">
                <div class="me-2">
                    <label for="search">Cédula del cliente<br>
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
            </thead>
            <tbody>

                @foreach ($authorizations as $item)
                    <tr>
                        <td>{{ $item->vehicle->l_plate }}</td>
                        <td>{{ $item->vehicle->customer->ci }}</td>
                        <td>{{ $item->vehicle->customer->name }}</td>
                        <td>{{ $item->user->name }}</td>
                        <td>{{ $item->authorization_type }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
