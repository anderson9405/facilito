@extends('layouts.app')
@section('title', 'Facilito - Carrito de compras')

@section('content')
  <div class="row">
    <div class="col-md-10 offset-md-1">
        <h1 style="color: #0B5345"> <i class="fa fa-cart-shopping"></i> Carrito de compras</h1>
        @if (Auth::user()->role->name == 'Administrador' || Auth::user()->role->name == 'Vendedor')
          <a href="{{route('products.create')}}" class="btn btn-primary my-3" style="color: black; background-color: #F1C40F ; border-color:#a48711"> 
            <i class="fa fa-plus pr-2"></i>
            Agregar producto
          </a>
        @endif
        <a class="m-4" href="{{ url('home') }}"><i class="fa fa-clipboard-list"></i>Volver al escritorio</a>
        <hr>
        @if (count($products)>0)
        <table class="table table-stripped table-hover mt-0">
            <thead>
              <tr>
                <th scope="col">Nombre</th>
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
                        <td>{{$product->name}}</td>
                        <td><img src="{{ asset($product->image) }}" width="36px"></td>
                        <td>{{$product->brand}}</td>
                        <td>{{ number_format($product->price, 0, ',', '.') }}</td>
                        <td>{{$product->user->fullname}}</td>
                        
                        <td>
                              <form action="{{route('products.destroy',$product)}}" method="POST" class="d-inline">
                                  @csrf
                                  @method('delete')
                                  <button type="button" class="btn btn-sm btn-danger btn-delete"><i class="fa fa-trash"></i></button>
                              </form>
                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
          </table>
          {{-- {{ $products->links() }} --}}

          <hr>
          <div style="text-align: center;">
            <h3 style="color: #0B5345;">
                <i class="fa-solid fa-coins"></i>  Total: {{ number_format($total, 0, ',', '.') }}
            </h3>
        </div>

        @else
            <div class="alert alert-warning my-4" role="alert">
                Aún no hay productos en el carrito
            </div> 
        @endif
    </div>
  </div>
@endsection