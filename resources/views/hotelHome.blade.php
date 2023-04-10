@extends('layouts.app')

@section('content')

<div class="m-0 p-0">
    <img src="img/cover2.jpeg" class="img-fluid shadow" alt="..." style="width: auto"> 

    <div class="col-sm-12  d-flex justify-content-center flex-warp px-3" style="margin-block-start: -16%">
        <div>
            <div class="w-100 p-3">
                <h5 class="text-warning">Bienvenue sur notre page de blog de voyage ! </h5>

            </div>
            <div class=" shadow w-100 card  p-2 d-flex justify-content-center" style="background:rgb(255, 213, 10)">
                <form class="d-flex align-items-center" role="search">

                    <label class="w-25 mx-2">Chercher </label>
                    <input class="form-control mx-2" type="search" placeholder="Nom de ville" aria-label="Search">
                    <button class="btn btn-white mx-2  fs-5 " type="submit"><img src="https://img.icons8.com/ios-filled/25/228BE6/search--v1.png"/></button>
                </form>
            </div>
            <p class="text-warning"><b>Nous sommes heureux de partager avec vous notre passion pour les voyages et
                    les aventures à travers le monde.</b>
            </p>
        </div>
    </div>
    <h5 class="pt-4 mt-5">Les hotels</h5>

    
    <div>
<div class="card" style="width: 18rem; ">
  <img src="img/novo1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Novotel</h5>
    <p class="">Hotel<img src="https://img.icons8.com/3d-fluency/20/null/star.png"/> (4)</p>
    <p class=""><b>Adress :</b>110 Bis, N9, Marrakech 40000</p>
    <p class=""><b>Numreo :</b>0639467124</p>
    
    <p class=""><b>Prix par nuit :</b>1200dh</p>

    <a href="#" class="btn btn-primary">view</a>
  </div>
</div>

    </div>

</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
</script>
@endsection