@extends('layouts.app')
@section('title', 'NovaTV - Ver producto')

@section('content')
<div class="row">
    <div class="col-md-10 offset-md-1">
        @auth
            <h1 style="color: #0B5345"> <i class="fa fa-search"></i>Ver producto</h1>
        @else
            <h1> <i class="fa fa-store"></i> {{$product->name}}</h1>
        @endauth
        
        <hr>
        @auth
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ url('home') }}">
                            <i class="fa fa-clipboard-list"></i>  
                            Escritorio
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('products.index') }}">
                            <i class="fas fa-list-alt"></i> 
                            Módulo productos
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <i class="fa fa-search"></i> 
                        Ver producto
                    </li>
                </ol>
            </nav>
        @endauth
        
        <form>
           
            <div class="mb-3">
                <div class="text-center my-3">
                    <img src="{{ asset($product->image) }}" alt="no-photo" class="img-thumbmail" id="preview" width="150px">
                </div>
            </div>

            
            <div class="mb-3">
                <label for="name" class="">Nombre</label>

                <div class="">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $product->name }}" required autocomplete="name" autofocus disabled>
                </div>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea name="description" class="form-control @error('description') is-invalid @enderror" cols="30" rows="4" disabled>{{ $product->description }}</textarea>
            </div>

            <div class="mb-3">
                <label for="brand" class="">Marca</label>

                <div class="">
                    <input id="brand" type="text" class="form-control @error('brand') is-invalid @enderror" name="brand" value="{{ $product->brand }}" required autocomplete="brand" autofocus disabled>
                </div>
            </div>

            <div class="mb-3">
                <label for="price" class="">Precio</label>

                <div class="">
                    <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $product->price }}" required autocomplete="price" autofocus disabled>
                </div>
            </div>

            <div class="mb-3">
                <label for="stock" class="">Cantidad disponible</label>

                <div class="">
                    <input id="stock" type="number" class="form-control @error('stock') is-invalid @enderror" name="stock" value="{{ $product->stock }}" required autocomplete="stock" autofocus disabled>
                </div>
            </div>

            <div class="mb-3">
                <label for="category_id" class="">Categoría</label>
                <select class="form-select" aria-label="Seleccione un categoria..." name="category_id" required disabled>
                    <option selected>{{ $product->category->name }}</option>                  
                </select>
            </div>

            <div class="mb-3">
                <label for="slide" class="">Destacado</label>
                <select class="form-select" aria-label="¿El producto está destacado?" name="slide" required disabled>
                    <option selected>{{ $product->slide }}</option>                 
                </select>
            </div>


            <div class="d-grid gap-2 mb-3">
                <a href="{{ route('products.index') }}" class="btn btn-primary btn-block" style="background-color: #08a117; border-color:#0c5e4e"><i class="fa fa-arrow-left mx-2"></i> Volver </a>
            </div>
            
            
        </form>
    </div>
</div> 
@endsection