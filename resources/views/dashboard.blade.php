@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
    <h1>Welcome to dashboard <strong>{{ session('authenticated') }}</strong></h1>
    <br>
    <hr>
    <a href="{{ route('customer.create') }}">Agregar customer</a>
@endsection
