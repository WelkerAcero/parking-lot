@extends('layouts.main')

@section('title', 'authorization-page')

@section('content')
    <div class="container">
        <div class="user-buttons">
            <h2 style="margin-right: 20px">Módulo usuario</h2>
            <img src="{{ asset('img/icons/user-regular.svg') }}" width="30px">
        </div>

        {{-- <a href="{{ route('customer.create') }}">Create new customer</a> --}}

        <a href="{{ route('customer.index') }}" style="background-color:black">
            <abbr title="Ir atras" style="cursor: pointer">
                <img src="{{ asset('img/icons/close.svg') }}" width="40px">
            </abbr>
        </a>
        <div class="container customer-profile">
            <h3><strong>Detalles del usuario</strong></h3>
            <div class="card">
                <div class="container">
                    <p>Cédula: {{ $customer->ci }}</p><br>
                    <p>Nombre: {{ $customer->name }}</p><br>
                    <p>Apellido: {{ $customer->lastname }}</p><br>
                    <p>Cargo: {{ $customer->charge->name }}</p><br>
                </div>
                <div class="card-header">
                    <h2>Simple QR Code</h2>
                </div>
                <div class="card-body">
                    {!! QrCode::size(300)->generate($customer->url) !!}
                </div>
            </div>
        </div>
    </div>
@endsection
