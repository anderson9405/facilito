@extends('layouts.app')
@section('title','NovaTV - Página de Bienvenida')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h3 style="color: #0B5345; text-align: center;"><i class="fa-solid fa-bell"></i>  Promociones del día</h3>
        
            <hr>
            <div class="owl-carousel owl-them">
                @foreach ($slider_products as $product)
                    <div class="slider" style="background-image: url({{ $product->image }})">
                        <p style="text-align: center;">¡ PROMOCIÓN DEL DÍA !
                        <br>
                        {{ $product->name }}
                        <br>
                        Se encuentra con un 10% de descuento
                        <br>
                        SOLO POR HOY
                        </p>
                    </div>
                @endforeach

            </div>

        </div>
        
    </div> 
    {{--  --}}
    <div class="row mt-2">
        <div class="col-md-12">
            <h3 style="color: #0B5345; text-align: center"><i class="fas fa-filter"></i>Filtrar productos por categoría</h3>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 offset-md-4">
            
            <select name="filter" id="filter" class="form-select form-control" >
                <option value="-2">Seleccione...</option>
                <option value="-1">Todos</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
        </select>
            
        </div>

    </div>
    <div class="loader d-none text-center my-2">
        <img src="{{ asset('images/elements/loader.gif') }}" alt="gif" width="100px">
    </div>
    <br><br>
    <div class="row justify-content-center" id="list-filter">
        <div class="col-md-12">
            {{-- @foreach ($categories as $category)
                <h3 class="mt-5">{{ $category->name }}</h3>
                <hr> --}}
                <div class="row" id="list-products">
                    @foreach ($products as $product)
                        {{-- @if ($product->category_id == $category->id) --}}
                            <div class="col-md-4 mb-4">
                                <div class="card mb-3" style="max-width: 540px; min-height:194px;">
                                    <div class="row no-gutters">
                                        <div class="col-md-6">
                                            <figure class="img-fcard" style="background-image: url({{ asset($product->image) }});"></figure>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card-body">
                                                <h5 class="card-title" style="font-size: 120%; font-weight: 600;">{{ $product->name }}</h5>
                                                <p class="card-text">
                                                    <small>
                                                        <p>Precio: <strong>{{ number_format($product->price, 0, ',', '.') }}</strong></p>
                                                    </small>
                                                </p>

                                                
                                                {{-- <div class="d-grid gap-2 mb-3" style="position: absolute; bottom: 10px; right: 10px;">

                                                    <a href="{{ route('cart', ['product_id' => $product->id, 'user_id' => Auth::user()->id]) }}" class="btn btn-block" style="background-color: #117864; border-color:#0c5e4e; color: white">
                                                        <i class="fa-solid fa-cart-arrow-down"></i>Agregar al carrito
                                                    </a>
                                                </div> --}}

                                                <form action="{{ route('cart') }}" method="POST" style="position: absolute; bottom: 10px; right: 10px;">
                                                    @csrf

                                                    @if (Auth::user() != null)
                                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                                    @endif
                                                    <button type="submit" class="btn btn-block" style="background-color: #117864; border-color:#0c5e4e; color: white">
                                                        <i class="fa-solid fa-cart-arrow-down"></i> Agregar al carrito
                                                    </button>
                                                </form>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {{-- @endif --}}
                    @endforeach
                </div>
                
            {{-- @endforeach --}}
        </div>
    </div>
@endsection
   

{{----- PROYECTO FINALIZADO VERSIÓN 1.0 -----}}
{{------ AUTOR: Jhon Anderson Giraldo -------}}


