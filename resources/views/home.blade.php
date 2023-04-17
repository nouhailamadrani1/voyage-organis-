@extends('layouts.app')

@section('content')

<div class="m-0 p-0" style="background: #00235B">

  
  <div class="d-flex align-items-end justify-content-center flex-wrap px-5 m-0 py-4 w-100  " >
    <img src="img/cover13.png" alt="" class="" srcset="" style="width: 270px">
    <div class="px-4 w-75">
      <h4 class="text-white text-start p-2 ">Voyage <span class="p-1" style="background-color:#E21818 ; color:white">Organisés</span></h4>
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
  <div class="bg-warning my-5 pt-5 mx-4">
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
  
        
                                                       <div class="mx-4 " style="background-color: #E21818 ">
                                                    <h4 class="d-flex justify-content-center w-100 text-white py-4">Profiter </h4>
                                                 <h4 class="d-flex justify-content-center w-100 text-white">Voyager avec nous c'est profiter de :</h4>
                                                 <p class="d-flex justify-content-center w-100  fst-italic text-white ">En tant qu'agence de voyage, nous pouvons vous offrir une expérience
                                                     de voyage unique et mémorable, avec de nombreux avantages pour les voyageurs. </p>
                                                    
                                                 <div class=" d-flex justify-content-center m-0 row" >
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

                                             

<div class="my-5 bg-warning  mx-4">
              
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
          
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<style></style>
@endsection
