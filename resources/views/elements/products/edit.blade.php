@extends('layouts.app')
@section('title', 'Facilito - Editar productos')

@section('content')
<div class="row">
    <div class="col-md-10 offset-md-1">
        <h1 style="color: #0B5345"> <i class="fa fa-pen"></i>Editar producto</h1>
        <hr>
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
                        Módulo poductos
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <i class="fa fa-pen"></i> 
                    Editar producto
                </li>
            </ol>
        </nav>
        <form method="POST" action="{{route('products.update',$product->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <div class="text-center my-3">
                    <img src="{{ asset($product->image) }}" alt="no-photo" class="img-thumbmail" id="preview" width="150px">
                </div>
                <label for="image">Foto</label>

                <div class="">
                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image" accept="image/*">

                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            
            <div class="mb-3">
                <label for="name" class="">Nombre</label>

                <div class="">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $product->name }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea name="description" class="form-control @error('description') is-invalid @enderror" cols="30" rows="4">{{ $product->description }}</textarea>
            </div>

            <div class="mb-3">
                <label for="brand" class="">Marca</label>

                <div class="">
                    <input id="brand" type="text" class="form-control @error('brand') is-invalid @enderror" name="brand" value="{{ $product->brand }}" required autocomplete="brand" autofocus>

                    @error('brand')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="price" class="">Precio</label>

                <div class="">
                    <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $product->price }}" required autocomplete="price" autofocus>

                    @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="stock" class="">Cantidad disponible</label>

                <div class="">
                    <input id="stock" type="number" class="form-control @error('stock') is-invalid @enderror" name="stock" value="{{ $product->stock }}" required autocomplete="stock" autofocus>

                    @error('stock')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="category_id" class="">Categoría</label>
                <select class="form-select" aria-label="Seleccione un categoria..." name="category_id" required>
                    <option selected>Seleccione...</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                    
                </select>
            </div>

            <div class="mb-3">
                <label for="slide" class="">Destacado</label>
                <select class="form-select" aria-label="¿El producto está destacado?" name="slide" required>
                    <option value="No" selected>No</option>
                    <option value="Si">Si</option>                    
                </select>
            </div>

            <div class="d-grid gap-2 mb-3">
                <button type="submit" class="btn btn-primary btn-block" style="background-color: #117864; border-color:#0c5e4e"><i class="fa fa-save mx-2"></i>Actualizar</button>
            </div>

            <div class="d-grid gap-2 mb-3">
                <a href="{{ route('products.index') }}" class="btn btn-primary btn-block" style="background-color: #08a117; border-color:#0c5e4e"><i class="fa fa-arrow-left mx-2"></i> Volver </a>
            </div>

        </form>
    </div>
</div> 
@endsection