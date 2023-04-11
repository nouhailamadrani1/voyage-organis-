@extends('layouts.app')

@section('content')

<div class="m-0 p-0">
    <img src="img/covertronsport.jpg" class="img-fluid shadow" alt="..." style="width: auto"> 

    <div class="col-sm-12  d-flex  justify-content-center flex-warp px-3" style="margin-block-start: -16%">
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
    <h4 class="pt-4 my-5 text-center ">Transport Touristique
    </h4>
    <p class="px-3 mt-2 text-center">Pour votre confort et votre sécurité, nos véhicules sont équipés des dernières technologies et bénéficient de révisions et d'entretiens réguliers dans le respect de la législation en vigueur et des normes environnementales.
      Choisissez parmi notre large gamme, le véhicule le mieux adapté à vos besoins et à votre budget</p>

  
   <section class="d-flex justify-content-center flex-wrap p-2"> 

    @foreach ($transports as $transport)
        

    <div class="card m-1 shadow-lg" style="width: 18rem;">
        <img src="images/{{ ($transport->image) }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><b>{{ $transport->nom }}</b></h5>
      
          <p class="fw-light my-0"><b>Nombre passagers:</b> {{ $transport->nombre_passagers }}</p>
          <p class="fw-light my-0"><b>De puis:</b> {{ $transport->depuis }}</p>
          <p class="fw-light my-0"><b>Pour :</b> {{ $transport->pour }}</p>
          <p class="fw-light my-0"><b>Heure départ :</b> {{ $transport->heure_de_départ }}</p>
          <p class="fw-light my-0"><b>Heure arrivee :</b> {{ $transport->heure_arrivee }}</p>
          <p class="fw-light my-0"><b>Date départ :</b> {{ $transport->date_de_départ }}</p>
          <p class="fw-light my-0"><b>Date arrivee :</b> {{ $transport->date_arrivee }}</p>
          <a href="#" class="btn btn-warning shadow-lg  my-2 rounded d-flex justify-content-center">réservez votre place</a>
        </div>
      </div>
      @endforeach
     
   </section>
 

</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
</script>
@endsection