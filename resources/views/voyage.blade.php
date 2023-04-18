@extends('layouts.app')
<style>.card-price {
  position: absolute;
  top: 0;
  right: -8px;
  padding: 10px;
  background-color: E21818;
  font-weight: bold;
}</style>
@section('content')

<div class="m-0 p-0" style="background: #00235B">
  <ul class="mx-4 nav nav-pills  nav-fill gap-2 p-1 small text-dark bg-white rounded-5 shadow-sm mt-5  fixed-top" id="pillNav2" role="tablist" style="--bs-nav-link-color: var(--bs-dark); --bs-nav-pills-link-active-color: var(--bs-white); --bs-nav-pills-link-active-bg: var(--bs-warning);">
      <li class="nav-item" >
          <a class="nav-link  rounded-5" href="{{ route('indexHome') }}">
              <img src="https://img.icons8.com/ios/15/null/home--v1.png" class="px-1"/>Accueil
          </a>
      </li>
      <li class="nav-item" >
          <a class="nav-link  rounded-5"  href="{{ route('articles.index') }}">
              <img src="https://img.icons8.com/ios/15/null/blogger.png" class="px-1"/>Blog
          </a>
      </li>
      <li class="nav-item" >
          <a class="nav-link  rounded-5"  href="{{ route('hotels') }}">
              <img src="https://img.icons8.com/ios-filled/15/null/5-star-hotel--v2.png" class="px-1"/>Hotel
          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link rounded-5"  href="{{ route('transportClient') }}">
              <img src="https://img.icons8.com/ios-filled/15/null/airport-transfer.png" class="px-1"/>Transport
          </a>
      </li>
      <li class="nav-item" >
          <a class="nav-link active rounded-5"  href="{{ route('voyageOrganise') }}">
              <img src="https://img.icons8.com/ios-filled/15/null/around-the-globe.png" class="px-1"/>Voyages Organisés
          </a>
      </li>
    </ul>
  
<div class="d-flex  justify-content-between align-items-center shadow" style="background:rgb(246, 167, 2)">
    <div class=""><h3 class="text-white text-center p-2 ">Voyage <span class="p-1" style="background: white; color:rgb(246, 167, 2)">Organisés</span></h3>
  <h3 class="text-white text-center px-2">Nous travaillons en étroite collaboration avec les meilleurs</h3>
        <h6 class="text-white text-center px-2"> prestataires de services de voyage pour vous offrir 
        des solutions complètes et personnalisées, qui comprennent la réservation de vols, d'hôtels, 
        de transferts, d'activités et de visites guidées.</h6>

    </div>
    <img src="img/333.jpg" alt="">
</div>
<h4 class="text-center text-white my-3">NOS BONS PLANS DU MOMENT</h4>

<section class="d-flex justify-content-center flex-wrap p-2"> 
  @foreach ($voyages as $voyage)
 
  {{--  --}}
  <div class="card border border-white border-4" style="width: 18rem">
    <img src="images/{{ $voyage->image }}" class="card-img-top"  alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $voyage->Titre }}</h5>
        <p class="card-text">
          <p class=" my-3  card-price text-white">{{$voyage->hotel->prix + $voyage->transport->prix + $voyage->prix}} DH</p>
            <p class=" my-5 card-price bg-warning text-white"><b>Ville :</b> {{ $voyage->pour }}</p>
       
        </p>
        <button class="btn btn m-0 border-warning border-4 text-white" type="button" style="background: #00235B" data-bs-toggle="offcanvas" data-bs-target="#{{ $voyage->id }}" aria-controls="offcanvasTop">Découvrir le voyage</button>
    </div>
</div>
 
  {{--  --}}
      {{-- <img src="images/{{ ($voyage->image) }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title my-3"> <b>{{ $voyage->Titre }}</b></h5>
    
        <p class="fw-light my-0"><b>Ville:</b> {{ $voyage->pour }}</p>
        <p class="fw-light my-0"><b>Prix:</b> {{ $voyage->prix }}DH</p>
        <button class="btn btn-primary"  type="button" data-bs-toggle="offcanvas" data-bs-target="#{{ $voyage->id }}" aria-controls="offcanvasTop">Voir plus</button> --}}

        <div class="offcanvas offcanvas-top h-100"tabindex="-1" id="{{ $voyage->id }}" aria-labelledby="offcanvasTopLabel">
          <div class="offcanvas-header">
            <a class=" d-flex " href="{{ url('/') }}">
              <img src="images/{{Auth::user()->image}} " class="rounded mx-2 " alt="" style="width: 40px ; hight: 40px">
              <li class="align-items-center d-flex justify-content-between ">
                <a class="mx-1 text-decoration-none fw-semibold text-dark" href="#aboutvoyage"> About </a>
                <span class="px-2">/ </span>
                <a class="mx-2 text-decoration-none fw-semibold text-dark" href="#transp">Transport</a>
                <span class="px-2">/ </span>
                <a class="mx-2 text-decoration-none fw-semibold text-dark" href="#hote">Hotel</a>
                <span class="px-2">/ </span>
                <a class="mx-2 text-decoration-none fw-semibold text-dark" href="#reserve">reservation</a>
   
            </li>
          </a>
        
           
      
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body d-flex justify-content-between flex-wrap   " style="background: #00235B" >
          
            <div class="m-0 d-flex justify-content-center flex-wrap w-100  "> 
      <div class="d-flex justify-content-center flex-wrap border-2 border my-2 border-warning  w-75 shadow bg-white " id="aboutvoyage" >
       
        <div class="h4 pb-2 mb-4  border-2 border-bottom border-warning">
          <h5 class="my-2 p-2" style="color: #f52222" > {{ $voyage->titre }}</h5>
        </div>

        <p class="my-2 p-2">{{ $voyage->description}}</p>
        <img src="images/{{ ($voyage->image) }}" class="p-2" style="width:300px" alt="...">
        
         
       </div>
    
        <div class=" shadow text-start p-2 border-2 border border-warning my-2 w-75 bg-white " id="transp">
          <h4 class="my-2"  ><b>{{$voyage->transport->nom}}</b></h4>
          <div class=" ">
            <p class="btn btn-warning mx-1 "><img src="https://img.icons8.com/ios/20/null/air-conditioner.png"/> Climatisation </p><p class=" btn btn-warning mx-1"><img src="https://img.icons8.com/material-outlined/20/null/plug.png"/> Prise</p>
            <p class="btn btn-warning mx-1"><img src="https://img.icons8.com/ios-filled/20/null/wifi-logo.png"/> Wifi </p>
           
            <p class="btn btn-warning mx-1"><img src="https://img.icons8.com/ios-filled/20/null/car-seat.png"/>Siège en cuir </p></div>
          <div class="d-flex justify-content-between my-3">
            <div> 
                <p class="fw-light  fs-6 my-3"><img src="https://img.icons8.com/external-glyph-andi-nur-abdillah/20/94D82D/external-Good-survey-(glyph)-glyph-andi-nur-abdillah.png"/><b>Nombre passagers : </b>{{$voyage->transport->nombre_passagers}}</p>
                <p class="fw-light  fs-6  my-3"> <img src="https://img.icons8.com/external-glyph-andi-nur-abdillah/20/94D82D/external-Good-survey-(glyph)-glyph-andi-nur-abdillah.png"/><b>De puis : </b>{{$voyage->depuis}}</p>
                <p class="fw-light fs-6  my-3"><img src="https://img.icons8.com/external-glyph-andi-nur-abdillah/20/94D82D/external-Good-survey-(glyph)-glyph-andi-nur-abdillah.png"/> <b>Pour : </b>{{$voyage->pour}}</p>
                <p class="fw-light  fs-6 my-3"><img src="https://img.icons8.com/external-glyph-andi-nur-abdillah/20/94D82D/external-Good-survey-(glyph)-glyph-andi-nur-abdillah.png"/><b>Heure départ : </b>{{$voyage->heure_de_départ}}</p>
                <p class="fw-light fs-6  my-3"><img src="https://img.icons8.com/external-glyph-andi-nur-abdillah/20/94D82D/external-Good-survey-(glyph)-glyph-andi-nur-abdillah.png"/><b>Heure arrivee : </b>{{$voyage->heure_arrivee}}</p>
                <p class="fw-light fs-6  my-3"><img src="https://img.icons8.com/external-glyph-andi-nur-abdillah/20/94D82D/external-Good-survey-(glyph)-glyph-andi-nur-abdillah.png"/><b>Date départ : </b>{{$voyage->date_de_départ}}</p>
                <p class="fw-light fs-6  my-3"><img src="https://img.icons8.com/external-glyph-andi-nur-abdillah/20/94D82D/external-Good-survey-(glyph)-glyph-andi-nur-abdillah.png"/><b>Date arrivee : </b>{{$voyage->date_arrivee}}</p></div>
                <img src="images/{{$voyage->transport->image}}" style="width: 40%" alt="">
          </div>
        </div>
        <div class=" card my-2 p-2 d-flex justify-content-center  border-2 border border-warning w-75 bg-white shadow " id="hote">
          <h4 class="card-title text center">{{$voyage->hotel->nom}}</b><span><img  class="" src="https://img.icons8.com/3d-fluency/20/null/star.png"/>({{$voyage->hotel->nbre_etoiles}}) </span> </h5>

          <div class="d-flex">

            <p class="btn btn-warning mx-1 "><img src="https://img.icons8.com/ios-filled/20/null/swimming-pool.png"/> Piscine </p><p class=" btn btn-warning mx-1"><img src="https://img.icons8.com/ios-filled/20/null/dining-room.png"/> Petit Dejeuner</p>
          <p class="btn btn-warning mx-1"><img src="https://img.icons8.com/ios-filled/20/null/wifi-logo.png"/> Wifi </p>
          <p class="btn btn-warning mx-1"><img src="https://img.icons8.com/ios/20/null/dumbbell--v1.png"/>Salle de sport </p>
          <p class="btn btn-warning mx-1"><img src="https://img.icons8.com/ios-filled/20/null/spa.png"/> Spa </p></div>
          <div class="d-flex justify-content-start align-items-center my-3 ">
          <img src="images/{{$voyage->hotel->image}}" style="width: 250px" >

 <div class="p-2">  
 
     <h6 class="fw-light "><b>Ville:</b>{{$voyage->hotel->ville}}<b></h6>
         <h6 class="fw-light"><b>Pays:</b>{{$voyage->hotel->pays}}<b></h6>
          <p class="fw-light"><b>Description:</b>{{$voyage->hotel->description}}<b></p>
          
   </div>
   
</div></div>
  {{--  --}}
  <div class="  p-2 shadow bg-white d-flex justify-content-center w-100 my-3 b border-3 border border-warning">  
    <form  method="POST" id="reserve"  class="w-100 my-2 p-3" action="{{ route('reservation.store') }}" enctype="multipart/form-data">
      @csrf
    <h5 class="text-center">réservation</h5>
    <input type="hidden" value="{{ Auth::user()->id }}" name="client_id">
    <label class="form-label fw-semibold">Nom</label>
    <input class="form-control" type="text" value="{{ Auth::user()->name }}" name="clientNom"   >
    <label class="form-label fw-semibold">id voyage</label>
    <input class="form-control" type="text" value="{{ $voyage->id}}" name="voyage_id" >
    <label class="form-label fw-semibold">Email</label>
    <input class="form-control" type="text" value="{{ Auth::user()->email }}" name="clientEmail"    >
    <label class="form-label fw-semibold">Hotel</label>
    <input class="form-control" type="text" value="{{$voyage->hotel->nom}}" name="hotel_nom"  >
               <div class="mb-3 mx-1">
      <label for="exampleFormControlInput1" class="form-label fw-semibold">Pays</label>
      <input type="text" class="form-control " name="pays" value="{{$voyage->pays}}" >
    </div>
    <div  class="d-flex justify-content-evenly">
      <div class="mb-3 mx-1">
          <label for="exampleFormControlInput1" class="form-label fw-semibold">De puis</label>
          <input type="text" class="form-control " name="depuis" value="{{$voyage->depuis}}"  >
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label fw-semibold">Pour</label>
          <input type="text" class="form-control " name="pour" value=" {{$voyage->pour}}" >
        </div>
     </div>
    <div  class="d-flex justify-content-evenly">
      <div class="mb-3 mx-1">
          <label for="exampleFormControlInput1" class="form-label fw-semibold">Date de départ</label>
          <input type="date" class="form-control " name="date_de_départ" value="{{$voyage->date_de_départ}}" >
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label fw-semibold">Date de l'arrivee</label>
          <input type="date" class="form-control " name="date_arrivee" value="{{$voyage->date_arrivee}}" >
        </div>
     </div>
     <div  class="d-flex justify-content-evenly">
      <div class="mb-3 mx-1">
          <label for="exampleFormControlInput1" class="form-label fw-semibold">Heure de départ</label>
          <input type="time" class="form-control " name="heure_de_départ" value="{{$voyage->heure_de_départ}}" >
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label fw-semibold">Heure de l'arrivee</label>
          <input type="time" class="form-control " name="heure_arrivee" value="{{$voyage->heure_arrivee}}">
        </div>
     </div>
     <div class="d-flex justify-content-between p-2 mt-3 border shadow border-2 border-warning bg-warning bg-opacity-25 text-green  align-items-center"><div>
      <h6 class="my-2">Prix Hotel :{{$voyage->hotel->prix}} DH</h6>
      <h6 class="my-2">Prix Tronsport : {{$voyage->transport->prix}} DH</h6>
      <h6 class="my-2">Prix Agence : {{$voyage->prix}} DH</h6>
     
    </div> <h5> Prix Total : <span  class="text-danger p-2">{{$voyage->hotel->prix + $voyage->transport->prix + $voyage->prix}} </span> DH </h5></div>
    <input type="hidden" class="form-control " name="prix_totale" value="{{$voyage->hotel->prix + $voyage->transport->prix + $voyage->prix}}" >

    <button type="submit" class="btn btn-warning mt-4  d-flex align-items-center">réserve</button>

    </form>
     </div>
  {{--  --}}
           </div>
        
          
          </div>
        </div>
      </div>
    </div>

    @endforeach
 </section>

 <footer class=" text-center fw-medium text-lg-start   " style="background: #98DFD6">
  <div class="container p-4">
    <div class="row">
      <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
     

        <img src="logo.png" alt="" style="width: 200px ; hight: 200px">
        <p></p>
         
      </div>

      <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">Liens utiles</h5>

        <ul class="list-unstyled mb-0">
          <li>
              <a class="nav-link rounded-5 p-1"  href="{{ route('voyageOrganise') }}">
                  <img src="https://img.icons8.com/ios-filled/20/null/around-the-globe.png" class="px-1"/>Voyages Organisés
              </a>
          </li>
          <li>
              <a class="nav-link rounded-5 p-1"  href="{{ route('transportClient') }}">
                  <img src="https://img.icons8.com/ios-filled/20/null/airport-transfer.png" class="px-1"/>Transport
              </a>
          </li>
          <li>
              <a class="nav-link rounded-5 p-1"  href="{{ route('hotels') }}">
                  <img src="https://img.icons8.com/ios-filled/20/null/5-star-hotel--v2.png" class="px-1"/>Hotel
              </a>
          </li>
          <li>
              <a class="nav-link rounded-5 p-1"  href="{{ route('articles.index') }}">
                  <img src="https://img.icons8.com/ios/20/null/blogger.png" class="px-1"/>Blog
              </a>
          </li>
        </ul>
      </div>

      <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">Contactez-nous</h5>

        <ul class="list-unstyled text-start mb-0">
          <li class="d-flex align-items-center p-1">
              <img src="https://img.icons8.com/external-kmg-design-glyph-kmg-design/20/null/external-map-map-and-navigation-kmg-design-glyph-kmg-design-3.png"/> Jardins de la Palmeraie, Marrakech, Maroc
          </li>
          <li class="d-flex align-items-center p-1">
            
              <img src="https://img.icons8.com/ios-filled/20/null/apple-mail.png"/>   voyageOrganise@nmvoyage.com
          </li>
          <li class="d-flex align-items-center p-1 ">
              <img src="https://img.icons8.com/external-flatart-icons-solid-flatarticons/20/null/external-call-contact-us-flatart-icons-solid-flatarticons.png"/>
            + 212 6 656 453 567
          </li>
          <li class="d-flex align-items-center p-1 ">
              <img src="https://img.icons8.com/external-icongeek26-glyph-icongeek26/20/null/external-phone-retro-80s-icongeek26-glyph-icongeek26-1.png"/>
           + 212 7 789 432 650
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Mon entreprise :
    <a class="text-dark" href="https://mdbootstrap.com/">NMouHil.com</a>
  </div>
</footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
</script>
@endsection