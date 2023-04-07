<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white m-0 p-0 ">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="logo.png" alt="" style="width: 80px ; hight: 80px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav m-0">
                        <div class="container-fluid p-2 ">
        
                            <ul class="d-flex justify-content-center   list-inline ">
                              <li class=" ">
                                <a class="nav-link px-3 py-1  mx-3 btn btn btn-outline-warning   border-bottom border-0 border-primary border-3" href="#">Accueil</a>
                              </li>
                              <li class="">
                                <a class="nav-link px-3 py-1 mx-3 btn btn-outline-warning  border-bottom border-0 border-primary border-3" href="{{route('articles.index')}}">Blog</a>
                              </li>
                              <li class="">
                                <a class="nav-link px-3 py-1  mx-3 btn btn-outline-warning  border-bottom border-0 border-primary border-3" href="#">Hotel</a>
                              </li>
                              <li class="">
                                <a class="nav-link px-3 py-1  mx-3 btn btn-outline-warning  border-bottom border-0 border-primary border-3" href="#">Tronsport</a>
                              </li>
                              <li class="">
                                <a class="nav-link px-3 py-1 mx-3 btn btn-outline-warning  border-bottom border-0 border-primary border-3" href="#">Voyage Organisé</a>
                              </li>
                            </ul>
                          </div>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="text-decoration-none px-3 text-warning  border-bottom border-0 border-primary border-3 " href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="text-decoration-none px-3 border-bottom border-0 border-warning border-3 " href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle fst-italic" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color:rgb(13, 111, 229);"><img src="https://img.icons8.com/ios-filled/20/228BE6/user.png"/>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="text-decoration-none px-3    " href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><img src="https://img.icons8.com/ios-filled/20/228BE6/logout-rounded-left.png"/>
                                        {{ __('Logout') }}
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

        <main class="">
            @yield('content')
        </main>
    </div>



    
</body>
</html>
