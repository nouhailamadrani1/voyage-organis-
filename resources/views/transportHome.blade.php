@extends('layouts.app')

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
            <a class="nav-link rounded-5 active"  href="{{ route('transportClient') }}">
                <img src="https://img.icons8.com/ios-filled/15/null/airport-transfer.png" class="px-1"/>Transport
            </a>
        </li>
        <li class="nav-item" >
            <a class="nav-link rounded-5"  href="{{ route('voyageOrganise') }}">
                <img src="https://img.icons8.com/ios-filled/15/null/around-the-globe.png" class="px-1"/>Voyages Organisés
            </a>
        </li>
      </ul>
    
    <img src="img/covertronsport.jpg" class="img-fluid shadow" alt="..." style="width: auto"> 

    <div class="col-sm-12  d-flex  justify-content-center flex-warp px-3" style="margin-block-start: -16%">
        <div>
            <div class="w-100 p-3">
                <h3 class="text-warning p-1"  style="background: #00235B">Bienvenue sur notre page Transports ! </h3>

            </div>
            <div class=" shadow w-100 card  p-2 d-flex justify-content-center" style="background:rgb(255, 213, 10)">
                <form class="d-flex align-items-center" role="search">

                    <label class="w-25 mx-2">Chercher </label>
                    <input class="form-control mx-2" type="search" placeholder="Nom de ville" aria-label="Search">
                    <button class="btn btn-white mx-2  fs-5 " type="submit"><img src="https://img.icons8.com/ios-filled/25/228BE6/search--v1.png"/></button>
                </form>
            </div>

        </div>
    </div>
    <h4 class="pt-4 my-5 text-center text-white ">Transport Touristique
    </h4>
    <p class="px-3 mt-2 text-center text-white">Pour votre confort et votre sécurité, nos véhicules sont équipés des dernières technologies et bénéficient de révisions et d'entretiens réguliers dans le respect de la législation en vigueur et des normes environnementales.
      Choisissez parmi notre large gamme, le véhicule le mieux adapté à vos besoins et à votre budget</p>

  
   <section class="d-flex justify-content-center flex-wrap p-2"> 

    @foreach ($transports as $transport)
        

    <div class="card m-1 shadow-lg" style="width: 18rem;">
        <img src="images/{{ ($transport->image) }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><b>{{ $transport->nom }}</b></h5>
      
          <p class="fw-light my-0"><b>Nombre passagers:</b> {{ $transport->nombre_passagers }}</p>
          
          <a href="#" class="btn btn-warning shadow-lg  my-2 rounded d-flex justify-content-center">réservez votre place</a>
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