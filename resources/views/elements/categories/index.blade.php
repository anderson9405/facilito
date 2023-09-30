@extends('layouts.app')
@section('title', 'NovaTV - Lista de Categorias')

@section('content')
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <h1 style="color: #0B5345"><i class="fa fa-list-alt"></i> Lista de Categorias</h1>
            <a href="{{ route('categories.create') }}" class="btn btn-primary my-3" style="color: black; background-color: #F1C40F ; border-color:#a48711">
                <i class="fa fa-plus pr-2"></i>
                Agregar categoría
            </a>
        </a> <a class="m-4" href="{{ url('home') }}"><i class="fa fa-clipboard-list"></i> Volver al escritorio</a>
            <hr>
            @isset($categories)
                @if (count($categories) >0)
                    <table class="table table-stripped table-hover">
                        <thead>
                            <tr>
                                <th class="col-md-1" scope="col">Id</th>
                                <th class="col-md-2" scope="col">Nombre</th>
                                <th class="col-md-5" scope="col">Descripción</th>   
                                <th class="col-md-2" scope="col">Fecha de creación</th>
                                <th class="col-md-2" scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->description }}</td>
                                    <td>{{ $category->created_at }}</td>
                                    <td>
                                        <a href="{{ route('categories.show',$category->id)}}" class="btn btn-sm btn-light"> <i class="fa fa-eye"></i> </a>
                                        <a href="{{ route('categories.edit',$category->id)}}" class="btn btn-sm btn-light"> <i class="fa fa-pen"></i> </a>
                                        <form action="{{ route('categories.destroy',$category) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button type="button" class="btn btn-sm btn-danger btn-delete"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                   
                                </tr>
                            @endforeach
                        </tbody>
                        
                    </table>
                    {{ $categories->links() }}
                @else
                    <div class="alert alert-warning my-4" role="alert">
                        Aún no hay categorías registradas
                    </div>
                @endif

                
            @endisset

        </div>
    </div>
@endsection