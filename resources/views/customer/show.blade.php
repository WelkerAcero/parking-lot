@extends('layouts.template')

@section('title', 'authorization-page')

@section('content')
    <h1>THIS IS THE PROFILE "DETALLES"</h1>
    <hr>
    <div class="container">
        <a href="{{ route('customer.index') }}" style="background-color:black">
            <abbr title="Ir atras" style="cursor: pointer">
                <img src="{{ asset('img/icons/close.svg') }}" width="40px">
            </abbr>
        </a>
        <div class="customer-profile">
            <h3><strong>Perfil del usuario</strong></h3>
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
                    {{ $customer->url . $customer->ci }}
                    {!! QrCode::size(300)->generate($customer->url . $customer->ci) !!}
                </div>
            </div>
        </div>
    </div>
@endsection
