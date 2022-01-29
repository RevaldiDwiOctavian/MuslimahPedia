<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>E-commerce</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('js/tinymce/jquery.tinymce.min.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .checked {
            color: orange;
        }

        body{
            background-color: #FDEBF7;
        }

        footer {
            position:fixed;
            bottom:0;
            width:100%;
               /* Height of the footer */
        }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark shadow-sm" style="background-color: #6867AC;">
            <div class="container">
            <a class="navbar-brand" href="/home">
                <img src="https://cdn-icons-png.flaticon.com/512/2922/2922752.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
                {{-- {{ config('app.name', 'Laravel') }} --}}
                    Muslimah<sup>Pedia</sup>
            </a>
                <a class="navbar-brand" href="{{ url('/') }}">
                    
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @if (Auth::check())
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/home">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{route('products.index')}}">Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{route('contact')}}">Kontak</a>
                        </li>
                        @endif

                    </ul>

                    {{-- center --}}
                    

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        {{-- cart --}}
                        <li class="nav-item">
                            <a href="{{ route('carts.index') }}" class="nav-link">
                                <i class="bi bi-cart-fill" aria-hidden="true"></i> 
                                Cart 
                                <sup class="badge badge-pill badge-danger">{{ count([session('cart')]) }}</sup>
                            </a>
                        </li>
                        <!-- Authentication Links -->
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
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                                                                                                                                                                                                                                                                                                                                                                                                                             document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer class=" pt-3 mt-4 text-white ">
    <div style="background-color: #6867AC;">
        <div class="container">
            
                <center>&copy; 2022 - Kelompok UAS Web Programming <br>
                Revaldi Dwi Octavian - Savira Yosita</center>
            
        </div>
    </div>
    </footer>
</body>

</html>
