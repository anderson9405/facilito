<nav class="navbar navbar-expand-md navbar-dark bg-facilito shadow-sm">
    <div class="container">
        <a class="navbar-brand m-0" style="font-size: 1.8rem; padding: 0px" href="{{ url('/home') }}">
            <img class="mb-1" src="{{ asset('images/logo.png') }}" alt="logo" width="40px">   Supermercado Facilito
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">
                        <i class="fa fa-user-lock"></i>
                        Iniciar sesión   
                        </a>
                    </li>
                    @endif

                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">
                            <i class="fa fa-user-edit"></i>
                            Registrarse  
                        </a>
                    </li>
                    @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color: white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <i class= 'fa fa-user m-2'></i>{{ Auth::user()->fullname }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        @if (Auth::user()->role->name == "Administrador")
                            
                            <a href="{{ url('users') }}" class="dropdown-item">
                                <i class="fa fa-users" style="margin-right: 5px"></i>
                                Administrar usuarios
                            </a>

                            <a href="{{ url('categories') }}" class="dropdown-item">
                                <i class="fa fa-list-alt" style="margin-right: 5px"></i>
                                Administrar categorías
                            </a>

                            <a href="{{ url('products') }}" class="dropdown-item">
                                <i class="fa fa-cart-shopping" style="margin-right: 5px"></i>
                                Administrar productos
                            </a>

                        @endif

                    @if (Auth::user()->role->name == "Vendedor")

                        <a href="{{ url('products') }}" class="dropdown-item">
                            <i class="fa fa-cart-shopping" style="margin-right: 5px"></i>
                            Administrar mis productos
                        </a>

                    @endif

                    @if (Auth::user()->role->name == "Cliente")

                    <a href="{{ url('cart') }}" class="dropdown-item">
                        <i class="fa fa-cart-shopping" style="margin-right: 5px"></i>
                        Ir al carrito
                    </a>

                    @endif
                        
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            <i class="fa-solid fa-right-from-bracket" style="margin-right: 15px; color:rgb(162, 19, 19)"></i>Cerrar cesión
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>