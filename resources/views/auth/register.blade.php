@extends('layouts.app')

@section('content')
<div class="container">
    <div class="">
        <div class="my-5 d-flex justify-content-center flex-wrap align-items-center   rounded-pill  shadow" style="background-color:rgb(205, 237, 250)">
            <div class=" d-flex justify-content-center align-items-center " style="width: 350px ;
            height: 420px;">
               <div>
                 <h4 class="pe-4 text-center" style="color:rgb(13, 111, 229);">You Welcome</h4>
                 <p class="text-white text-center">En tant qu'agence de voyage, nous pouvons vous offrir une expérience de voyage unique et mémorable, avec de nombreux avantages pour les voyageurs.</p>
               </div>
             </div>
            <div class="    d-flex justify-content-center align-items-center " style="width: 350px ;
            height: 400px;">
               
      

                <div class="">
                    <h4 class="pe-4 " style="color:rgb(13, 111, 229) ;">{{ __('Register') }}</h4>
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="">
                            <label for="name" class="my-1">{{ __('Name') }}</label>

                            <div class="">
                                <input id="name" type="text" class=" my-1 form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="">
                            <label for="email" class="my-1">{{ __('Email Address') }}</label>

                            <div class="">
                                <input id="email" type="email" class=" my-1 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="">
                            <label for="password" class="my-1">{{ __('Password') }}</label>

                            <div class="">
                                <input id="password" type="password" class="form-control my-1 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="">
                            <label for="password-confirm" class=" my-1 ">{{ __('Confirm Password') }}</label>

                            <div class="">
                                <input id="password-confirm" type="password" class=" my-2 form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        
                        <div class="">
                            <label for="" class=" my-1 ">{{ __('image') }}</label>

                            <div class="">
                                <input id="" type="file" class=" my-2 form-control" name="image" >
                            </div>


                        </div>

                        @if($errors->any())
                            {{ implode('', $errors->all('<div>:message</div>')) }}
                        @endif
                        <div class="">
                            <div class="">
                                <button type="submit" class=" my-1 btn text-white " style="background:rgb(13, 111, 229) ;">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
