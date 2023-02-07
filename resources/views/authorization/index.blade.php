@extends('layouts.main');

@section('title', 'customer')

@section('content')

    <div class="container">
        <hr>
        <h1>Lista de autorizaciones realizadas</h1>
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
