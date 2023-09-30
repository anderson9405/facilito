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