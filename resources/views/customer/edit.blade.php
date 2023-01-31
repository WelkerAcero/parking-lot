@extends('layouts.main');

@section('title', 'customer')

@section('content')

    <div class="container mt-2">
        <form action="{{ route('customer.update', $customer) }}" method="post">
            @csrf
            @method('put')

            <div class="w-50">
                <label for="">
                    Document type: <br>
                    <select name="doctype_id" id="doctype_id">
                        @foreach ($doctypes as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </label>
                <br>
                <label for="">
                    Ci: <br>
                    <input type="text" class="form-control" name="ci" value="{{ old('ci', $customer->ci) }}"
                        required>
                </label>
                <br>
                <label for="">
                    Name: <br>
                    <input type="text" class="form-control" name="name" value="{{ old('name', $customer->name) }}"
                        required>
                </label>
                <br>
                <label for="">
                    Lastname: <br>
                    <input type="text" class="form-control" name="lastname"
                        value="{{ old('lastname', $customer->lastname) }}">
                </label>
                <br>
                <label for="">
                    Email: <br>
                    <input type="email" class="form-control" name="email" value="{{ old('email', $customer->email) }}">
                </label>
                <br>
                <label for="">
                    Charge: <br>
                    <select name="charge_id" id="charge_id">
                        @foreach ($charges as $item)
                            @if ($item->id === $customer->charge_id)
                                <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                            @else
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </label>
                <br>
            </div>
            <br>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
@endsection
