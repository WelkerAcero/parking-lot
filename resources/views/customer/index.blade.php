@extends('layouts.main');

@section('title', 'customer')

@section('content')
    <div class="container">
        <table class="table table-dark table-hover">
            <thead>
                <th>Document type</th>
                <th>CI</th>
                <th>Name</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>QR_IMAGE_URL</th>
                <th>Charge</th>
            </thead>
            <tbody>

                @foreach ($customers as $item)
                    <tr>
                        <td>{{ $item->doctype->name }}</td>
                        <td>{{ $item->ci }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->lastname }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->url }}</td>
                        <td>{{ $item->charge->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
