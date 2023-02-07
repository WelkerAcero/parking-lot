@extends('layouts.main')

@section('title', 'Autorización')

@section('content')
    <div class="container">
        <div class="user-buttons">
            <h2 style="margin-right: 20px">Módulo usuario</h2>
            <img src="{{ asset('img/icons/user-regular.svg') }}" width="30px">
        </div>

        {{-- <a href="{{ route('customer.create') }}">Create new customer</a> --}}

        <a href="{{ route('customer.index') }}" class="user-back">
            <abbr title="Ir atras" style="cursor: pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="30px">
                    <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                    <path
                        d="M360 224L272 224v-56c0-9.531-5.656-18.16-14.38-22C248.9 142.2 238.7 143.9 231.7 150.4l-96 88.75C130.8 243.7 128 250.1 128 256.8c.3125 7.781 2.875 13.25 7.844 17.75l96 87.25c7.031 6.406 17.19 8.031 25.88 4.188s14.28-12.44 14.28-21.94l-.002-56L360 288C373.3 288 384 277.3 384 264v-16C384 234.8 373.3 224 360 224zM256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 464c-114.7 0-208-93.31-208-208S141.3 48 256 48s208 93.31 208 208S370.7 464 256 464z" />
                </svg>
            </abbr>
            <h3 style="margin-left: 10px">Regresar</h3>
        </a>

        <div class="container container-detail-user">
            <div class="user-title-form">
                <h4 style="margin-right: 10px">DETALLES DEL USUARIO</h4>
                <img src="{{ asset('img/icons/user-regular.svg') }}" width="25px">
            </div><br>
            <div class="customer-profile">
                <div class="container info-detail">
                    <h5><b>Cédula:</b></h5>
                    <h5 class="input-detail">{{ $customer->ci }}</h5>
                    <h5><b>Nombre:</b></h5>
                    <h5 class="input-detail">{{ $customer->name }}</h5>
                    <h5><b>Apellido:</b></h5>
                    <h5 class="input-detail">{{ $customer->lastname }}</h5>
                    <h5><b>Cargo:</b></h5>
                    <h5 class="input-detail"> {{ $customer->charge->name }}</h5>
                </div>
                <div class="card-header"><br>
                    <h4><b>Código QR</b></h4><br>
                    <div class="card-body">
                        {!! QrCode::size(200)->generate($customer->url) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
