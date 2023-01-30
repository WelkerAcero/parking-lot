@extends('layouts.template')

@section('title', 'authorization-page')

@section('content')

    <h1>Authorization page</h1>
    <hr>
    <div class="container">
        <div>
            <h3>Perfil del usuario</h3>
            <div>
                <p>{{ $customer_profile->ci }}</p><br>
                <p>{{ $customer_profile->name }}</p><br>
                <p>{{ $customer_profile->lastname }}</p><br>
                <p>{{ $customer_profile->charge->name }}</p><br>
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
