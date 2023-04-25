<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NM</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
       <link href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css">
    </head>
    <body class="" style="background-image: url('img/bg.jpg');">

            @if (Route::has('login'))
                <div class="d-flex justify-content-start p-2 my-1 ">
                    <div><img src="logo.png" alt="" style="width: 100px ; hight: 100px"></div>
                  </div>
                    @auth
              
                    @else
                    <div class="d-flex justify-content-center ">
                    <div>
                        <a href="{{ route('login') }}" class="text-decoration-none px-3 btn btn-white text-info mx-2 shadow-sm border-bottom   bg-body-tertiary rounded" >Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-decoration-none px-3 btn btn-white shadow-sm text-info border-bottom  bg-body-tertiary rounded">Register</a>
                        @endif
                      </div>
                    </div>
                    @endauth
                
            @endif
          



                      
                  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    </body>
</html>
