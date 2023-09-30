@extends('layouts.app')
@section('title', 'Facilito - Home')

@section('content')
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <img class="my-2 img-top-card" width="300px" src="{{ asset('images/elements/dashboard.svg') }}" alt="img-dasboard">
                <div class="card-header-facilito text-center">
                    <h4>
                        <i class="fa fa-clipboard-list"></i>
                        Escritorio
                        |
                        <small>
                            <i class="fa fa-user-ninja"></i>Cliente
                        </small>
                    </h4>
                </div>  
                
                <div class="card-body row">

                    <div class="col-md-3 my-4">
                        <div class="card text-center">
                            <a href="{{ url('cart') }}"><img class="image-card m-2" src="{{ asset('images/elements/shopping-cart.webp') }}" alt="categories" width="205px" class="my-2 img-top-card"></a>
                            <div class="card-body">
                                <a href="{{ url('cart') }}" class="btn btn-primary btn-block" style="color: black; background-color: #F1C40F ; border-color:#a48711">
                                    <i class="fa fa-cart-shopping"></i>
                                    Mi carrito de compras
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 my-4">
                        <div class="card text-center">
                            <a href="{{ route('welcome') }}"><img class="image-card m-2" src="{{ asset('images/elements/store.jpg') }}" alt="users" width="218px" class="my-2 img-top-card"></a>
                            <div class="card-body">
                                <a href="{{ route('welcome') }}" class="btn btn-primary btn-block"  style="color: black; background-color: #F1C40F ; border-color:#a48711 ">
                                    <i class="fa-solid fa-store"></i>
                                    Ir a la tienda
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                
            </div>
        </div>
    </div>

@endsection