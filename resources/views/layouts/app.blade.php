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
<body class="m-0 p-0">
    <div id="app">
        <nav class="navbar navbar-expand-md fixed-top navbar-light bg-white  p-0 ">
            <div class="container ">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="logo.png" alt="" style="width: 80px ; hight: 80px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                   

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="text-decoration-none px-3 text-dark" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="text-decoration-none px-3 text-dark " href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="align-items-center d-flex justify-content-end">
                            @if (Auth::user()->role == 2)
                            <a class="mx-1 text-decoration-none fw-semibold text-dark btn btn-danger text-white" href="/dashboard">Dashboard</a>
                            @endif
                            <a class="mx-2 text-decoration-none fw-semibold text-dark" href="#contact2">Contact</a>
                        </li>
                            <li class=" "> 
                                
                                <a   class="text-decoration-none " >
                                    <img src="https://img.icons8.com/ios/50/null/search--v1.png" class="rounded p-2  " style="width: 40px ; hight: 40px ; " />
                              
                                     
                                </a>
                            <a href="{{ route('showReservation' , Auth::user()->id )}}" class="text-decoration-none " >
                                
                                <img src="https://img.icons8.com/ios/50/null/appointment-reminders--v1.png" class="rounded bg-body-tertiary p-2  " style="width: 40px ; hight: 40px"/>
                                <a href="{{ route('getCount' , Auth::user()->id )}}" class="text-decoration-none "><span class="badge rounded-pill badge-notification bg-danger " style="margin-left: -10px ;">{{$reservationsCount}}</span>
   
                                </a>
                                </a>
                                {{-- <span class="badge bg-danger rounded-pill" style="margin-left: 2px">14</span> --}}
                            </a>
                         <a  href="/profileUser" >  
                             <img src="images/{{Auth::user()->image}} " class="rounded mx-2  " alt="" style="width: 40px ; hight: 40px">
                         </a>
                            </li>

                                {{-- <div class="dropdown-menu dropdown-menu-end  text-dark " aria-labelledby="navbarDropdown"> --}}
                                    <a class="text-decoration-none text-dark " href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><img src="https://img.icons8.com/ios-filled/50/null/logout-rounded-left.png" class="rounded  p-2 mx-2 " style="width: 35px ; hight: 35px"/>
                                        {{-- {{ __('Logout') }} --}}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                {{-- </div> --}}
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class=" mt-5 pt-4 content">
            @yield('content')
        </main>
    </div>
</body>
</html>