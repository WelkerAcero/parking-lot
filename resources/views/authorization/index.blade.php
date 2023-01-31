@extends('layouts.template')

@section('title', 'authorization-page')

@section('content')

    <h1>Authorization page</h1>
    <hr>
    <div class="container">
        <div class="customer-profile">
            <h3><strong>Perfil del usuario</strong></h3>

            <div class="card">
                <div>
                    <p>Cédula: {{ $customer_profile->ci }}</p><br>
                    <p>Nombre: {{ $customer_profile->name }}</p><br>
                    <p>Apellido: {{ $customer_profile->lastname }}</p><br>
                    <p>Cargo: {{ $customer_profile->charge->name }}</p><br>
                </div>
                <div class="card-header">
                    <h2>Simple QR Code</h2>
                </div>
                <div class="card-body">
                    {!! QrCode::size(300)->generate($customer_profile->url . $customer_profile->ci) !!}
                </div>
            </div>
        </div>
        <div class="w-50">
            <p>Entrada</p>
            <form action="{{ route('authorization.store') }}" method="post">
                @csrf
                <label for="customer_id">Cédula del usuario</label>
                <input type="text" value="{{ $customer_profile->ci }}" class="form-control" name="customer_id" hidden>
                <input type="text" value="Entrance" hidden name="authorization_type">
                <button type="submit">ENTRADA</button>
            </form>
        </div>
        <br>
        <div class="w-50">
            <p>Salida</p>
            <form action="{{ route('authorization.store') }}" method="post">
                @csrf
                <label for="customer_id">Cédula del usuario</label>
                <input type="text" value="{{ $customer_profile->ci }}" class="form-control" name="customer_id" hidden>
                <input type="text" value="Exit" hidden name="authorization_type">
                <button type="submit">SALIDA</button>
            </form>
        </div>
    </div>
@endsection
