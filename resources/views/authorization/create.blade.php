@extends('layouts.template')

@section('title', 'authorization-page')

@section('content')

    <h1>Página de autorización</h1>
    <hr>
    <div class="container">

        <h2 style="display: flex;justify-content: center">El código ha sido escaneado, esta es la información</h2>
        <div class="container-gestion">
            <div style="display: flex;justify-content: center">
                <h3><strong>Perfil del usuario para dar acceso</strong></h3>
                <img src="{{ asset('img/icons/autorizar.svg') }}" width="30px">
            </div>
            @error('vehicle_id')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror

            <div style="display: flex;justify-content: space-evenly">
                <div style="width: 40%">
                    <h4>Cédula: </h4>
                    <h4 class="au-page-input">{{ $customer_profile->ci }}</h4>
                    <h4>Nombre: </h4>
                    <h4 class="au-page-input">{{ $customer_profile->name }}</h4>
                    <h4>Apellido: </h4>
                    <h4 class="au-page-input">{{ $customer_profile->lastname }}</h4>
                    <h4>Email: </h4>
                    <h4 class="au-page-input">{{ $customer_profile->email }}</h4>
                    <h4>Cargo: </h4>
                    <h4 class="au-page-input">{{ $customer_profile->charge->name }}</h4>
                </div>

                <div style="width: 40%;text-align: center">
                    <div class="text-center">
                        <h4>Código QR del cliente</h4>
                    </div>
                    {!! QrCode::size(230)->generate($customer_profile->url) !!}
                    <div><br>
                        <div>
                            <form action="{{ route('authorization.store') }}" method="post">
                                @csrf
                                <input type="text" value="{{ $customer_profile->ci }}" class="form-control"
                                    name="customer_id" hidden>
                                <input type="text" value="Entrance" hidden name="authorization_type">
                                <button type="submit" class="btn btn-primary" style="width: 100%">PERMITIR ENTRADA</button>
                            </form>
                        </div>
                        <br>
                        <div>
                            <form action="{{ route('authorization.store') }}" method="post">
                                @csrf
                                <input type="text" value="{{ $customer_profile->ci }}" class="form-control"
                                    name="customer_id" hidden>
                                <input type="text" value="Exit" name="authorization_type" hidden>
                                <button type="submit" class="btn btn-danger" style="width: 100%">PERMITIR SALIDA</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
