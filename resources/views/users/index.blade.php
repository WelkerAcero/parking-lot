@extends('layouts.main')

@section('title', 'Customer')

@section('content')

    <div class="container">
        <div class="user-buttons">
            <h2 style="margin-right: 20px">Módulo usuarios administrativos</h2>
            <img src="{{ asset('img/icons/user-regular.svg') }}" width="30px">
        </div>

        <x-button>
            <x-slot name="type">user</x-slot>
            <x-slot name="add">Agregar Usuario</x-slot>
            <x-slot name="list">Listar Usuarios</x-slot>
        </x-button>
        {{-- <a href="{{ route('customer.create') }}">Create new customer</a> --}}
    </div>


    <div class="container user-content container--user">
        @foreach ($users as $data)
            <div class="indicate-columns">
                <div class="lista_programas pd-2">
                    <h5 class="id p-2 text-center">
                        <b>User</b>
                    </h5>
                    <a href="#" class="user-img" id="user-img">
                        <img id="programa_imagen" class="img-thumbnail"
                            src="https://png.pngtree.com/png-vector/20190710/ourlarge/pngtree-user-vector-avatar-png-image_1541962.jpg" />
                    </a>
                    <p class="empFullname p-1 me-2">

                        <label for="name" class="p-2"><b>Nombre:</b>
                            {{ $data->name }}
                        </label>

                        <label for="lastname" class="p-2"><b>Apellido:</b>
                            {{ $data->lastname }}
                        </label>

                        <label for="email" class="p-2"><b>Email:</b>
                            {{ $data->email }}
                        </label>
                    </p>
                    <hr />
                    <div class="buttons-content m-2">
                        <div class="">
                            {{--                             <a href="" class="btn btn-success m-2">
                                <i class="far fa-address-card"></i> Detalles
                            </a> --}}
                        </div>
                        <div class="buttons-edit-delete">
                            {{--  <a class="me-3" href="{{ route('user.edit', $data->id) }}">
                                <abbr title="Editar información" style="cursor: pointer">
                                    <img src="{{ asset('img/icons/edit.svg') }}" width="35px">
                                </abbr>
                            </a> --}}
                            {{--                  <form method="post" action="{{ route('user.destroy', $data->id) }}">
                                @csrf
                                @method('delete')
                                <button type="submit" id="btn-AlertDelete">
                                    <abbr title="Eliminar información" style="cursor: pointer;">
                                        <img src="{{ asset('img/icons/delete.svg') }}" width="35px">
                                    </abbr>
                                </button>
                            </form> --}}

                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

    <div class="paginator-content">
        <div class="paginator-sec mt-5">
            {{ $users->links() }}
        </div>
    </div>



@endsection
