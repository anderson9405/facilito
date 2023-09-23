@extends('layouts.app')
@section('title', 'Facilito - Home')

@section('content')
    
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                <img class="my-2 img-top-card" width="300px" src="{{ asset('images/elements/dashboard.svg') }}" alt="img-dasboard">
                <div class="card-header-facilito text-center">
                    <h4>
                        <i class="fa fa-clipboard-list"></i>
                        Escritorio
                        |
                        <small>
                            <i class="fa fa-user-ninja"></i> Administrador
                        </small>
                    </h4>
                </div>  
                
                <div class="card-body row">
                    <div class="col-md-4 my-4">
                        <div class="card text-center">
                            <a href="{{ route('users.index') }}"><img class="image-card m-2" src="{{ asset('images/elements/users.png') }}" alt="users" width="218px" class="my-2 img-top-card"></a>
                            <div class="card-body">
                                <a href="{{ route('users.index') }}" class="btn btn-primary btn-block"  style="color: black; background-color: #F1C40F ; border-color:#a48711 ">
                                    <i class="fa fa-users"></i>
                                    Administrar usuarios
                                </a>
                            </div>
                        </div>
                    </div>

                {{--  --}}

                    <div class="col-md-4 my-4">
                        <div class="card text-center">
                            <a href=""><img class="image-card m-2" src="{{ asset('images/elements/products.png') }}" alt="products" width="218px" class="my-2 img-top-card"></a>
                            <div class="card-body">
                                <a href="#" class="btn btn-primary btn-block" style="color: black; background-color: #F1C40F ; border-color:#a48711">
                                    <i class="fa fa-cart-shopping"></i>
                                    Administrar productos
                                </a>
                            </div>
                        </div>
                    </div>

                    
                    {{--  --}}

                    <div class="col-md-4 my-4">
                        <div class="card text-center">
                            <a href=""><img class="image-card m-2" src="{{ asset('images/elements/categories.png') }}" alt="categories" width="195px" class="my-2 img-top-card"></a>
                            <div class="card-body">
                                <a href="#" class="btn btn-primary btn-block" style="color: black; background-color: #F1C40F ; border-color:#a48711">
                                    <i class="fa fa-list-alt"></i>
                                    Administrar categorías
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                
            </div>
        </div>
    </div>

@endsection