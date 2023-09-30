@extends('layouts.app')
@section('title', 'Facilito - Lista de productos')

@section('content')
  <div class="row">
    <div class="col-md-10 offset-md-1">
        <h1 style="color: #0B5345"> <i class="fa fa-cart-shopping"></i>Lista de productos</h1>
        @if (Auth::user()->role->name == 'Administrador' || Auth::user()->role->name == 'Vendedor')
          <a href="{{route('products.create')}}" class="btn btn-primary my-3" style="color: black; background-color: #F1C40F ; border-color:#a48711"> 
            <i class="fa fa-plus pr-2"></i>
            Agregar producto
          </a>
        @endif
        <a class="m-4" href="{{ url('home') }}"><i class="fa fa-clipboard-list"></i>Volver al escritorio</a>
        <hr>
        <br>
        @if (count($products)>0)
        <table class="table table-stripped table-hover">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Categoría</th>
                <th scope="col">Imagen</th>
                <th scope="col">Marca</th>
                <th scope="col">Precio</th> 
                <th scope="col">Vendedor</th>           
                <th scope="col">Acciones</th>
                
              </tr>
            </thead>
            <tbody>

                @foreach ($products as $product)
                    <tr>
                        <th>{{$product->id}}</th>
                        <td>{{$product->name}}</td>
                        <td>{{$product->category->name}}</td>
                        <td><img src="{{ asset($product->image) }}" width="36px"></td>
                        <td>{{$product->brand}}</td>
                        <td>{{ number_format($product->price, 0, ',', '.') }}</td>
                        <td>{{$product->user->fullname}}</td>
                        
                        <td>
                            <a href="{{route('products.show',$product->id)}}" class="btn btn-sm btn-light"><i class="fa fa-eye"></i></a>
                            @if (Auth::user()->role->name == 'Administrador' || Auth::user()->role->name == 'Vendedor')
                              <a href="{{route('products.edit',$product->id)}}" class="btn btn-sm btn-light"> <i class="fa fa-pen"></i></a>
                              <form action="{{route('products.destroy',$product)}}" method="POST" class="d-inline">
                                  @csrf
                                  @method('delete')
                                  <button type="button" class="btn btn-sm btn-danger btn-delete"><i class="fa fa-trash"></i></button>
                              </form>
                            @endif
                        </td>
                        
                    </tr>
                @endforeach
              
            </tbody>
          </table>
          {{ $products->links() }}

        @else
            <div class="alert alert-warning my-4" role="alert">
                Aún no hay productos registrados
            </div> 
        @endif
    </div>
  </div>
@endsection