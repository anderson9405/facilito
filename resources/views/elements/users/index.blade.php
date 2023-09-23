@extends('layouts.app')
@section('title','Facilito - Lista de usuarios')

@section('content')

    <div class="row">
        <div class="col-md-10 offset-md-1">
            <h1 style="color: #0B5345 ;"><i class="fa fa-users"></i>Lista de usuarios</h1>
            <a href="{{ route('users.create') }}" class="btn btn-primary my-3" style="color: black; background-color: #F1C40F ; border-color:#a48711">
                <i class="fa fa-plus pr-2"></i>
                Agregar usuario
            </a> <a class="m-4" href="{{ url('home') }}"><i class="fa fa-clipboard-list"></i> Volver al escritorio</a>
            <hr>
            @isset($users)
                @if (count($users)>0)
                    <table class="table table-stripped table-hover">
                        <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombre completo</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Teléfono</th>
                                    <th scope="col">Fecha de creación</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->fullname }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>
                                        <a href="{{ route('users.show', $user->id)}}" class="btn btn-sm btn-light">
                                            <i class="fa fa-eye"></i>
                                        </a>

                                        <a href="{{ route('users.edit', $user->id)}}" class="btn btn-sm btn-light">
                                            <i class="fa fa-edit"></i>
                                        </a>

                                        <form action="{{ route('users.destroy', $user) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button type="button" class="btn btn-sm btn-light btn-delete">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>

                                    </td>

                                </tr>
                            @endforeach
                        </tbody>

                    </table>

                    {{ $users->links() }}

                @else
                    <div class="alert alert-warning my-4" role="alert">
                       Aún no hay usuarios registrados
                    </div>
                @endif    



            @endisset

        </div>
    </div>
    
@endsection