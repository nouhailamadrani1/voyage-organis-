@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="my-5 d-flex justify-content-center flex-wrap align-items-center   rounded-pill  shadow" style="background-color:rgb(205, 237, 250)">
        <div class=" d-flex justify-content-center align-items-center " style="width: 350px ;
        height: 400px;">
           <div>
             <h4 class="pe-4 text-center" style="color:rgb(13, 111, 229);">You Welcome</h4>
             <p class="text-white text-center">En tant qu'agence de voyage, nous pouvons vous offrir une expérience de voyage unique et mémorable, avec de nombreux avantages pour les voyageurs.</p>
           </div>
         </div>
        <div class="    d-flex justify-content-center align-items-center " style="width: 350px ;
        height: 400px;">
            <div class="">
              
                <h4 class="pe-4 " style="color:rgb(13, 111, 229) ;">{{ __('Login') }}</h4>
                <div class="">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="">
                            <label for="email" class=" my-1">{{ __('Email Address') }}</label>

                            <div class="">
                                <input id="email" type="email" class="  my-1 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="">
                            <label for="password" class=" my-1">{{ __('Password') }}</label>

                            <div class="">
                                <input id="password" type="password" class="   my-1 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="">
                            <div class="">
                                <div class="  my-1 form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="">
                            <div class="d-flex justify-content-center">
                                <button type="submit"  class="  my-1 btn btn shadow text-white" style="background:rgb(13, 111, 229) ;">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="color:rgb(13, 111, 229);">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>






</div>



   
@endsection
