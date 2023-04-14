@extends('layouts.app')

@section('content')

<div class="m-0 p-0">
<div class="d-flex  justify-content-between align-items-center shadow" style="background:rgb(246, 167, 2)">
    <div class=""><h3 class="text-white text-center p-2 ">Voyage <span class="p-1" style="background: white; color:rgb(246, 167, 2)">Organisés</span></h3>
  <h3 class="text-white text-center px-2">Nous travaillons en étroite collaboration avec les meilleurs</h3>
        <h6 class="text-white text-center px-2"> prestataires de services de voyage pour vous offrir 
        des solutions complètes et personnalisées, qui comprennent la réservation de vols, d'hôtels, 
        de transferts, d'activités et de visites guidées.</h6>

    </div>
    <img src="img/333.jpg" alt="">
</div>
<h4 class="text-center">NOS BONS PLANS DU MOMENT</h4>
<section class="d-flex justify-content-center flex-wrap p-2"> 

  @foreach ($voyages as $voyage)
      
  
  <div class="card m-1 shadow-lg" style="width: 18rem;">
      <img src="images/{{ ($voyage->image) }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><b>{{ $voyage->Titre }}</b></h5>
    
        <p class="fw-light my-0"><b>Ville:</b> {{ $voyage->pour }}</p>
        <p class="fw-light my-0"><b>Prix:</b> {{ $voyage->prix }}DH</p>
        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Voir plus</button>

        <div class="offcanvas offcanvas-top h-100" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasTopLabel">Voyage</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body d-flex justify-content-between flex-wrap  ">
            <div class="w-50  p-2 shadow bg-white">   <form class="w-100">
            <h5 class="text-center">réservation</h5>
           
            <label class="form-label fw-semibold">Nom</label>
            <input class="form-control" type="text" value="{{ Auth::user()->name }}" name="clientNom"  aria-label="Disabled input example" disabled readonly>
            <label class="form-label fw-semibold">Email</label>
            <input class="form-control" type="text" value="{{ Auth::user()->email }}" name="clientEmail"  aria-label="Disabled input example" disabled readonly>
            <label class="form-label fw-semibold">Hotel</label>
            <input class="form-control" type="text" value="{{$voyage->hotel->nom}}" name="hotel_nom"  aria-label="Disabled input example" disabled readonly>
            <label class="form-label fw-semibold">Chamber</label>
            <select class="form-select mb-3" name="chamber_id">
              @foreach ($hotels as $hotel)
                  
             
              <option value="{{ $hotel->id }}">{{  $hotel->nom }}</option>
              @endforeach
            </select>
            <div class="mb-3 mx-1">
              <label for="exampleFormControlInput1" class="form-label fw-semibold">Pays</label>
              <input type="text" class="form-control " name="pays" value="{{$voyage->pays}}" disabled readonly>
            </div>
            <div  class="d-flex justify-content-evenly">
              <div class="mb-3 mx-1">
                  <label for="exampleFormControlInput1" class="form-label fw-semibold">De puis</label>
                  <input type="text" class="form-control " name="depuis" value="{{$voyage->depuis}}" disabled readonly>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label fw-semibold">Pour</label>
                  <input type="text" class="form-control " name="pour" value=" {{$voyage->pour}}" disabled readonly>
                </div>
             </div>
            <div  class="d-flex justify-content-evenly">
              <div class="mb-3 mx-1">
                  <label for="exampleFormControlInput1" class="form-label fw-semibold">Date de départ</label>
                  <input type="date" class="form-control " name="date_de_départ" value="{{$voyage->date_de_départ}}" disabled readonly>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label fw-semibold">Date de l'arrivee</label>
                  <input type="date" class="form-control " name="date_arrivee" value="{{$voyage->date_arrivee}}" disabled readonly>
                </div>
             </div>
             <div  class="d-flex justify-content-evenly">
              <div class="mb-3 mx-1">
                  <label for="exampleFormControlInput1" class="form-label fw-semibold">Heure de départ</label>
                  <input type="time" class="form-control " name="heure_de_départ" value="{{$voyage->heure_de_départ}}" disabled readonly>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label fw-semibold">Heure de l'arrivee</label>
                  <input type="time" class="form-control " name="heure_arrivee" value="{{$voyage->heure_arrivee}}" disabled readonly>
                </div>
             </div>
             <div class="d-flex justify-content-between p-2 mt-3 border shadow border-2 align-items-center"><div>
              <h6>Prix Hotel : 600 DH</h6>
              <h6>Prix Tronsport : 700DH</h6>
              <h6>Prix Agence : 300DH</h6>
             
            </div> <h5> Prix Total :    1300  DH</h5></div>
             
            <button type="submit" class="btn btn-primary mt-4  d-flex align-items-center">réserve</button>
      
            </form>
             </div>
            <div class="w-50 p-2  "> 
      <div class="d-flex  flex-wrap p-2 w-100 my-2  shadow"  >
      
            <div class="w-50 p-2">  <h5>Titre :{{ $voyage->Titre }}</b></h5>
        <p>{{ $voyage->description }}</p></div>
        <img src="images/{{ ($voyage->image) }}" class="w-50" alt="..."></div>
        <div class=" shadow text-start p-2">
          <h6>Transport</h6>
          <div class="d-flex justify-content-between">
            <div>  <h6 class="my-0"><b>{{$voyage->transport->nom}}</b></p>
                <p class="fw-light my-0"><b>Nombre passagers:</b>{{$voyage->transport->nombre_passagers}}</p>
                <p class="fw-light my-0"><b>De puis:</b>{{$voyage->depuis}}</p>
                <p class="fw-light my-0"><b>Pour :</b>{{$voyage->pour}}</p>
                <p class="fw-light my-0"><b>Heure départ :</b>{{$voyage->heure_de_départ}}</p>
                <p class="fw-light my-0"><b>Heure arrivee :</b>{{$voyage->heure_arrivee}}</p>
                <p class="fw-light my-0"><b>Date départ :</b>{{$voyage->date_de_départ}}</p>
                <p class="fw-light my-0"><b>Date arrivee :</b>{{$voyage->date_arrivee}}</p></div>
                <img src="images/{{$voyage->transport->image}}" style="width: 40%" alt="">
          </div>
        </div>
        <div class=" card my-2 p-2 d-flex justify-content-center border-0 shadow "><div class="d-flex justify-content-between ">
          <img src="images/{{$voyage->hotel->image}}" style="width: 30%">
 <div class="p-2">  
     <h5 class="card-title">{{$voyage->hotel->nom}}</b><span><img  class="" src="https://img.icons8.com/3d-fluency/20/null/star.png"/>({{$voyage->hotel->nbre_etoiles}}) </span> </h5>
     <p class="fw-light"><b>Ville:</b>{{$voyage->hotel->ville}}<b></p>
         <p class="fw-light"><b>Pays:</b>{{$voyage->hotel->pays}}<b></p>
   </div>

</div></div>
           </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
   
 </section>
 
 
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
</script>
@endsection