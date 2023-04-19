@extends('layouts.app')

@section('content')
<div class="container">
    <div class="w-100 d-flex justify-content-center align-items-center m-0 ">
        <div class="my-5 d-flex justify-content-center flex-wrap align-items-center  rounded-pill w-75 shadow" style="background-color:rgb(205, 237, 250)">
        
           
               
      

                <div class="">
                    <form method="POST" action="{{ route('register') }}" class="d-flex align-items-start  justify-content-center flex-wrap p-4  " enctype="multipart/form-data">
                        @csrf

        <div class="mx-4"><input type="file"  name="image" class="d-none" id="actual-btn"/>

            <label for="actual-btn"   class=" rounded-circle p-2 border border-primary border-2   " ><img  src="https://img.icons8.com/ios/50/0d6fe5/compact-camera.png"/></label></div>
                        <div  class="mx-4">
                    <h4 class="pe-4 " style="color:rgb(13, 111, 229) ;">{{ __('Register') }}</h4>

                        <div>
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
                    </div>
                    </form>
                </div>
           
        </div>
    </div>
</div>
@endsection
