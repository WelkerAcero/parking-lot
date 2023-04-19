@extends('layouts.main')

@section('title', 'Control acceso/salida')

@section('content')

    <div class="container">
        <div class="user-buttons">
            <h2 style="margin-right: 20px"><b>Lista de autorizaciones realizadas</b></h2>
            <img src="{{ asset('img/icons/square-parking-solid.svg') }}" width="30px">
        </div>

        <div class="component-button">
            <div class="mt-3">
                <a href='{{ route('authorization.index') }}' id="button-list-off" class="boton-clear button-list-off">
                    Mostrar todos
                </a>
            </div>
            <div class="mt-3">
                <a href='{{ route('authorization.current') }}' id="button-add-off" class="boton-clear button-add-off">
                    Mostrar parqueados
                </a>
            </div>
        </div>
    </div>

    <div class="filter-section container">
        <form action="{{ route('authorization.filter') }}" method="post">
            @csrf
            <div class="filter mb-3 w-50">
                <div class="me-2">
                    <label for="search"><b style="font-size: 22px">Cédula del cliente</b><br>
                        <input type="number" maxlength="10" name="getById" placeholder="Escriba cédula del cliente">
                    </label>
                </div>

                <div class="me-2">
                    <label for="search"><b style="font-size: 22px">Indique fecha</b><br>
                        <input type="date" name="getByDate" placeholder="fecha: year/month/day">
                    </label>
                </div>

                <div>
                    <button class="form-control login-left-btn mt-4" type="submit">Buscar</button>
                </div>
            </div>
        </form>

    </div>
    @if (isset($msgError))
        <div class="container d-flex justify-content-center alert alert-danger" role="alert">
            <strong>{{ $msgError }}</strong>
        </div>
    @else
        <div class="container">
            <div class="container table-responsive">
                <table class="table table-bordered table-dark table-striped table-hover">
                    <thead>
                        <th>Placa del auto</th>
                        <th>Cédula del dueño</th>
                        <th>Nombre del dueño</th>
                        <th>Autorizado por</th>
                        {{-- <th>¿Estacionado?</th> --}}
                        <th>Tipo de Autorización</th>
                        <th>Fecha de Autorización</th>
                    </thead>
                    <tbody>

                        @foreach ($authorizations as $item)
                            <tr>
                                <td>{{ $item->l_plate }}</td>
                                <td>{{ $item->customer_ci }}</td>
                                <td>{{ $item->customer_name }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->authorization_type }}</td>
                                <td>{{ $item->created_at }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

            <div class="paginator-content">
                <div class="paginator-sec mt-5">
                    {{ $authorizations->links() }}
                </div>
            </div>
        </div>
    @endif


@endsection
