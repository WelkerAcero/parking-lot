@extends('layouts.template')

@section('title', 'authorization-page')

@section('content')

    <h1 class="text-center">Página de autorización</h1>
    <hr>
    <div class="container">
        @if (!isset($msgError))
            <h2 style="display: flex;justify-content: center">
                El código ha sido escaneado, esta es la información del cliente
            </h2>
            <div class="container-gestion">
                <div style="display: flex;justify-content: center">
                    <h3><strong>Perfil del usuario para dar acceso o salida</strong></h3>
                    <div class="ms-3">
                        <img src="{{ asset('img/icons/autorizar.svg') }}" width="30px">
                    </div>
                </div>
                @error('l_plate')
                    <div class="alert alert-danger d-flex justify-content-center" role="alert">
                        <div class="d-flex flex-column">
                            <div class="d-flex">
                                <p>{{ $message }}</p>
                            </div>
                            <div class="component-button d-flex d-flex justify-content-center">
                                <a href='{{ route('vehicle.create') }}' id="button-add-off" class="boton-clear button-add-off">
                                    Crear vehículo
                                </a>
                            </div>
                        </div>
                    </div>
                @enderror

                <div class="profile-container">
                    <div style="width:100%">
                        <h4>Cédula: </h4>
                        <h4 class="au-page-input">{{ $customer->ci }}</h4>
                        <h4>Nombre: </h4>
                        <h4 class="au-page-input">{{ $customer->name }}</h4>
                        <h4>Apellido: </h4>
                        <h4 class="au-page-input">{{ $customer->lastname }}</h4>
                        <h4>Email: </h4>
                        <h4 class="au-page-input">{{ $customer->email }}</h4>
                        <h4>Célular: </h4>
                        <h4 class="au-page-input">{{ $customer->cellphone }}</h4>
                        <h4>Cargo: </h4>
                        <h4 class="au-page-input">{{ $customer->charge->name }}</h4>
                        <h4>Status: </h4>
                        @if ($customer->status)
                            <h4 class="au-page-input">Se encuentra parqueado</h4>
                        @else
                            <h4 class="au-page-input">No se encuentra parqueado</h4>
                        @endif
                    </div>
                    <div class="qr-buttons-container">
                        <div class="qr-container text-center">
                            <h4><strong> Código QR del cliente</strong></h4>
                            {!! QrCode::size(230)->generate($customer->url) !!}
                        </div>
                        <div><br>

                            @if (!$customer->status)
                                <div>
                                    <form action="{{ route('authorization.store') }}" method="post">
                                        @csrf
                                        <input type="text" value="{{ $customer->ci }}" class="form-control"
                                            name="customer_id" hidden>

                                        <input type="text" value="Entrance" hidden name="authorization_type">
                                        <button type="submit" class="btn btn-primary">
                                            PERMITIR ENTRADA
                                        </button>
                                    </form>
                                </div>
                            @else
                                <div>
                                    <form action="{{ route('authorization.store') }}" method="post">
                                        @csrf
                                        <input type="text" value="{{ $customer->ci }}" class="form-control"
                                            name="customer_id" hidden>

                                        <input type="text" value="Exit" name="authorization_type" hidden>
                                        <button type="submit" class="btn btn-danger">
                                            PERMITIR SALIDA
                                        </button>
                                    </form>
                                </div>
                            @endif

                        </div>
                    </div>

                </div>
            </div>
        @else
            @isset($msgError)
                <div class="alert alert-danger d-flex justify-content-center" role="alert">
                    <strong>{{ $msgError }}</strong>
                </div>
            @endisset
        @endif

    </div>
@endsection
