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
                            <a class="mx-1 text-decoration-none fw-semibold text-dark"> About</a>
                            <a class="mx-2 text-decoration-none fw-semibold text-dark">Contact</a>
                        </li>
                            <li class=" "> 
                                <a  >
                                    <img src="https://img.icons8.com/ios/50/null/search--v1.png" class="rounded  p-2 mx-2 " style="width: 40px ; hight: 40px ; " />
                                </a>
                            <a  >
                                <img src="https://img.icons8.com/ios/50/null/appointment-reminders--v1.png" class="rounded bg-body-tertiary p-2 mx-2 " style="width: 40px ; hight: 40px"/>
                            </a>
                         <a>   <img src="images/{{Auth::user()->image}} " class="rounded mx-2 " alt="" style="width: 40px ; hight: 40px">
                         </a>
                            </li>

                                <div class="dropdown-menu dropdown-menu-end  text-dark " aria-labelledby="navbarDropdown">
                                    <a class="text-decoration-none px-3 text-dark " href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><img src="https://img.icons8.com/ios-filled/20/0000/logout-rounded-left.png"/>
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


 <ul class="m-0 ">
                      
        
                            <ul class=" mx-4 nav nav-pills nav-fill gap-2 p-1 small text-dark bg-white rounded-5 shadow-sm" id="pillNav2" role="tablist" style="--bs-nav-link-color: var(--bs-dark); --bs-nav-pills-link-active-color: var(--bs-white); --bs-nav-pills-link-active-bg: var(--bs-warning);">
                              <li class="nav-item" role="presentation">
                                <a  class="nav-link active rounded-5" id="home-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="true" href="{{route('indexHome')}}"> <img src="https://img.icons8.com/ios/15/null/home--v1.png" class="px-1"/>Accueil</a>
                              </li>
                              <li class="nav-item" role="presentation">
                                <a class="nav-link rounded-5" id="profile-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="false" href="{{route('articles.index')}}"><img src="https://img.icons8.com/ios/15/null/blogger.png" class="px-1"/>Blog</a>
                              </li>
                              <li class="nav-item" role="presentation">
                                <a class="nav-link rounded-5" id="profile-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="false" href="{{route('hotels')}}"> <img src="https://img.icons8.com/ios-filled/15/null/5-star-hotel--v2.png" class="px-1"/>Hotel</a>
                              </li>
                              <li class="nav-item" role="presentation">
                                <a  class="nav-link rounded-5" id="profile-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="false" href="{{route('transportClient')}}"><img src="https://img.icons8.com/ios-filled/15/null/airport-transfer.png" class="px-1"/>Tronsport</a>
                              </li>
                              <li class="nav-item" role="presentation">
                                <a  class="nav-link rounded-5" id="profile-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="false" href="{{route('voyageOrganise')}}"><img src="https://img.icons8.com/ios-filled/15/null/around-the-globe.png" class="px-1"/>Voyage Organisés</a>
                              </li>
                            </ul>
                         
                    </ul>

        
        <main class=" m-0 p-0">
            @yield('content')
        </main>
    </div>



    
</body>
</html>
