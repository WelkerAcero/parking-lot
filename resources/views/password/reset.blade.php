@extends('layouts.template')

@section('title', 'password reset')

@section('content')

    <div class="container d-flex justify-content-center" style="height:500px">
        <form action="{{ route('change.pass') }}" method="post">
            @csrf
            <div class="align-items-center">
                <h3>Chage your password</h3>
                <label for="email" style="width:300px">
                    Escribe tu email
                    <br>
                    <input type="email" class="w-100" name="email" required placeholder="Escribe tu email asociado">
                    @error('email')
                        <p>Error: {{ $message }}</p>
                    @enderror
                </label>
                <br>
                <label class="mt-3" for="password" style="width:300px">
                    Nueva contraseña
                    <br>
                    <input type="password" class="w-100" name="password" required
                        placeholder="Escribe tu nuevo contraseña">
                    @error('password')
                        <p>Error: {{ $message }}</p>
                    @enderror
                </label>
                <br>
                <label class="mt-3" for="password_confirmation" style="width:300px">
                    Verifica la nueva contraseña
                    <br>
                    <input type="password" class="w-100" name="password_confirmation" required
                        placeholder="Confirma contraseña">
                    @error('password_confirmation')
                        <p>Error: {{ $message }}</p>
                    @enderror
                </label>

                <input type="text" name="token" value="{{ $token }}" hidden>
                <button class="form-control login-left-btn w-100 mt-3" type="submit">Change password</button>
            </div>
        </form>
    </div>
@endsection
