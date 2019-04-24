<nav class="navbar navbar-expand-md navbar-light fixed-top" style="background: #4aa0e6">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}" style="color: #cc2255;">
            KPop Albums
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>





        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

                <form class="form-inline" action="{{route('search.product')}}">
                    <input name="q" required class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i> </button>
                </form>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->

                <li class="nav-item">
                    <a href="{{route('cart.show')}}" class="nav-link"><i class="fa fa-shopping-cart"></i>
                        @if(Session::has('cart'))
                            <span class="badge badge-light">
                                {{Session::get('cart')->totalQty}}
                            </span>
                        @endif
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('contact')}}" class="nav-link"><i class="fas fa-file-contract"></i> Contact Us</a>
                </li>

                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('order')}}"><i class="fas fa-receipt"></i> Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('categories')}}"><i class="fas fa-list"></i> Category</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('products')}}"><i class="fas fa-database"></i> Products</a>
                    </li>


                    <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                       <i class="fa fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="fas fa-power-off"></i> {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>