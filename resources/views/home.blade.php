@extends('layouts.app')

@section('content')
<ul class="mx-4 nav nav-pills  nav-fill gap-2 p-1 small text-dark bg-white rounded-5 shadow-sm mt-5  fixed-top" id="pillNav2" role="tablist" style="--bs-nav-link-color: var(--bs-dark); --bs-nav-pills-link-active-color: var(--bs-white); --bs-nav-pills-link-active-bg: var(--bs-warning);">
  <li class="nav-item" >
      <a class="nav-link active rounded-5" href="{{ route('indexHome') }}">
          <img src="https://img.icons8.com/ios/15/null/home--v1.png" class="px-1"/>Accueil
      </a>
  </li>
  <li class="nav-item" >
      <a class="nav-link rounded-5"  href="{{ route('articles.index') }}">
          <img src="https://img.icons8.com/ios/15/null/blogger.png" class="px-1"/>Blog
      </a>
  </li>
  <li class="nav-item" >
      <a class="nav-link rounded-5"  href="{{ route('hotels') }}">
          <img src="https://img.icons8.com/ios-filled/15/null/5-star-hotel--v2.png" class="px-1"/>Hotel
      </a>
  </li>
  <li class="nav-item">
      <a class="nav-link rounded-5"  href="{{ route('transportClient') }}">
          <img src="https://img.icons8.com/ios-filled/15/null/airport-transfer.png" class="px-1"/>Transport
      </a>
  </li>
  <li class="nav-item" >
      <a class="nav-link rounded-5"  href="{{ route('voyageOrganise') }}">
          <img src="https://img.icons8.com/ios-filled/15/null/around-the-globe.png" class="px-1"/>Voyages Organisés
      </a>
  </li>
</ul>
<div class="m-0 p-0" style="background: #00235B">

  
  <div class="d-flex align-items-end justify-content-center flex-wrap px-5 m-0 py-4 w-100  " >
    <img src="img/cover13.png" alt="" class="" srcset="" style="width: 270px">
    <div class="px-4 w-75">
      {{-- <h4 class="text-white text-start p-2 ">Voyage <span class="p-1" style="background-color:#E21818 ; color:white">Organisés</span></h4> --}}
      <h4 class="text-white text-start p-4  ">Voyage <span class="p-1" style="background-color:#E21818 ; color:white">Organisés</span></h4>

      <h5 class="text-start fw-lighter text-white">Nous travaillons en étroite collaboration avec les meilleurs</h5>
      <p class="text-start fw-lighter text-white"> prestataires de services de voyage pour vous offrir 
        des solutions complètes et personnalisées, qui comprennent la réservation de vols, d'hôtels, 
        de transferts, d'activités et de visites guidées.</p>
        <h6 class="d-flex justify-content-start py-1  text-white">Quelle sera votre prochaine destination ?</h6>
        <div class="  d-flex justify-content-start ">
            <div class=" shadow card  p-1 d-flex justify-content-start border border-2 border-warning " style="background-color: rgb(253, 253, 253)" >
                <form  action="{{ route('indexHome') }}" method="GET"class="d-flex align-items-center "  role="search">
                    <label for="">Date</label>
                    <input class="form-control mx-1  border border-2 border-warning " type="date"  aria-label="Search">
                    <label for="">Destination</label>
                    <input class="form-control mx-1 border border-2 border-warning"  name="search" value="{{ $searchTerm }}" type="search" placeholder="Destination" aria-label="Search">
                    <button class="btn btn-outline-warning mx-1 " type="submit"> <img src="https://img.icons8.com/ios/30/null/search--v1.png"></button>
                  </form>
            </div>
          </div>
    </div>
   
  </div>
  <div class=" my-5 pt-5 mx-4" style="background: #FFDD83">
    <h4 class="text-center text-white pt-2 ">Les Hotels</h4>
    <h6 class="text-center  text-white fst-italic" > Nous avons rassemblé une liste complète d'hôtels de qualité dans différentes destinations, pour répondre à tous les goûts et à tous les budgets!</h6>
    <section class="d-flex justify-content-center  flex-wrap p-2"> 
    
      @foreach ($hotels as $hotel)
          
      
       <div class="card  m-1" style="width: 18rem;">
           <img src="images/{{ ($hotel->image) }}" style="width: 18rem ; hight: 18rem" class="card-img-top" alt="...">
           <div class="card-body">
             <h5 class="card-title"><b>{{ $hotel->nom }}</b><span><img src="https://img.icons8.com/3d-fluency/20/null/star.png"/> ({{ $hotel->nbre_etoiles }})</span> </h5>
             <p class="fw-light"><b>Ville:</b>{{ ($hotel->ville) }} <b> Pays:</b>{{ ($hotel->pays) }}</p>
             {{-- <p class="fw-light text-justify" style="text-align:justify; "><b>Desciption:</b>{{ Str::limit($hotel->description,90) }}</p> --}}
    
           </div>
         </div>
       
         
         @endforeach
        

      </section>
      
      <nav aria-label="Page navigation ">
        <ul class="pagination justify-content-center my-pagination p-2">
            <li class="page-item{{ ($hotels->currentPage() == 1) ? ' disabled' : '' }}">
                <a class="page-link" href="{{ $hotels->url(1) }}">First</a>
            </li>
            
            <!-- Previous Page Link -->
            @if ($hotels->currentPage() > 1)
                <li class="page-item ">
                    <a class="page-link " href="{{ $hotels->previousPageUrl() }}" rel="prev">&laquo;</a>
                </li>
            @endif
            
            <!-- Pagination Elements -->
            @for ($i = 1; $i <= $hotels->lastPage(); $i++)
                <li class="page-item{{ ($hotels->currentPage() == $i) ? ' active' : '' }}">
                    <a class="page-link" href="{{ $hotels->url($i) }}">{{ $i }}</a>
                </li>
            @endfor
            
            <!-- Next Page Link -->
            @if ($hotels->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $hotels->nextPageUrl() }}" rel="next">&raquo;</a>
                </li>
            @endif
            
            <li class="page-item{{ ($hotels->currentPage() == $hotels->lastPage()) ? ' disabled' : '' }}">
                <a class="page-link" href="{{ $hotels->url($hotels->lastPage()) }}">Last</a>
            </li>
        </ul>
    </nav>
   
    </div>
  
        
                                                       <div class="mx-4 ">
                                                    <h4 class="d-flex justify-content-center w-100 text-white py-4">Profiter </h4>
                                                 <h4 class="d-flex justify-content-center w-100 text-white">Voyager avec nous c'est profiter de :</h4>
                                                 <p class="d-flex justify-content-center w-100  fst-italic text-white ">En tant qu'agence de voyage, nous pouvons vous offrir une expérience
                                                     de voyage unique et mémorable, avec de nombreux avantages pour les voyageurs. </p>
                                                    
                                                 <div class=" d-flex justify-content-center flex-wrap m-0 row" >
                                                    <div class="p-2 d-flex flex-column align-items-center col-3" >
                                                        <img class="rounded-circle "  src="/img/money.jpg" style="width: 60%; "/>
                                                        <p  class="fw-bold text-white">  Meilleur Prix garanti</p>
                                                     </div>
                                                     <div class="p-2 d-flex flex-column align-items-center col-3" >
                                                        <img class="rounded-circle "  src="/img/uniqe.jpg" style="width: 60%; "/>
                                                        <p  class="fw-bold text-white">Une expérience de voyage unique </p>
                                                     </div>
                                                     <div class="p-2 d-flex flex-column align-items-center col-3" >
                                                        <img class="rounded-circle " src="/img/tronsport.jpg" style="width: 60%;" />
                                                        <p  class="fw-bold text-white"> Des transports de qualité</p>
                                                     </div>
                                                     <div class="p-2 d-flex flex-column align-items-center col-3" >
                                                        <img class="rounded-circle " src="/img/hotel.jpg" style="width: 60%; "  />
                                                        <p class="fw-bold text-white"> Des hébergements de qualité </p>
                                                     </div>
                                                 </div>
                                               
                                                </div>

                                             

<div class="my-5   mx-4"  style="background: #FFDD83">
              
                                                <h4 class="text-center text-white pt-2">Transport Touristique</h4>
                                                <h6 class="text-center  text-white fst-italic" >Choisissez parmi notre large gamme, le véhicule le mieux adapté à vos besoins et à votre budget</h6>   
   <section class="d-flex justify-content-center flex-wrap p-2    " > 
   
    @foreach ($transports as $transport)
        

    <div class="card m-1 " style="width: 18rem;">
        <img src="images/{{ ($transport->image) }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><b>{{ $transport->nom }}</b></h5>
      
          <p class="fw-light my-0"><b>Nombre passagers:</b> {{ $transport->nombre_passagers }}</p>
          
        </div>
      </div>
      @endforeach
     
   </section>
   <nav aria-label="Page navigation ">
    <ul class="pagination justify-content-center my-pagination p-2">
        <li class="page-item{{ ($hotels->currentPage() == 1) ? ' disabled' : '' }}">
            <a class="page-link" href="{{ $hotels->url(1) }}">First</a>
        </li>
        
        <!-- Previous Page Link -->
        @if ($transports->currentPage() > 1)
            <li class="page-item ">
                <a class="page-link " href="{{ $transports->previousPageUrl() }}" rel="prev">&laquo;</a>
            </li>
        @endif
        
        <!-- Pagination Elements -->
        @for ($i = 1; $i <= $transports->lastPage(); $i++)
            <li class="page-item{{ ($transports->currentPage() == $i) ? ' active' : '' }}">
                <a class="page-link" href="{{ $transports->url($i) }}">{{ $i }}</a>
            </li>
        @endfor
        
        <!-- Next Page Link -->
        @if ($transports->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $transports->nextPageUrl() }}" rel="next">&raquo;</a>
            </li>
        @endif
        
        <li class="page-item{{ ($transports->currentPage() == $transports->lastPage()) ? ' disabled' : '' }}">
            <a class="page-link" href="{{ $transports->url($transports->lastPage()) }}">Last</a>
        </li>
    </ul></div>

    <div class="d-flex justify-content-evenly flex-wrap">
      <form class=" w-50">
        <div class=" d-flex justify-content-between">
          <div class="mb-3">  <h3 class="text-warning">Contactez-nous</h3></div>
        <img   src="https://img.icons8.com/external-smashingstocks-mixed-smashing-stocks/50/ffc107/external-contact-us-marketing-and-business-management-smashingstocks-mixed-smashing-stocks.png" />
      
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label text-white">Nom</label>
          <input type="text" class="form-control border border-0  border-bottom border-5  border-warning" placeholder="entrez votre nom"  id="exampleInputEmail1" aria-describedby="emailHelp">
         
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label text-white">Email address</label>
          <input type="email" class="form-control w-100  border border-0 border-bottom border-5   border-warning"  placeholder="entrez votre email" id="exampleInputEmail1" aria-describedby="emailHelp">
   
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label text-white">Message</label>
          <textarea class="form-control  border border-0 border-bottom border-5  border-warning" placeholder="entrez votre message" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input " id="exampleCheck1">
          <label class="form-check-label text-white  " for="exampleCheck1">Vérifiez-moi</label>
        </div>
        <button type="submit" class="btn btn-warning text-white">Envoyer</button>
      </form>
      <img src="img/cover23.png">
    </div>
  </div>
                                              </div>
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
          
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<style></style>
@endsection
