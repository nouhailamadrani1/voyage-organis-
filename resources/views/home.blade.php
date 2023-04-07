@extends('layouts.app')

@section('content')

<div class="m-0 p-0">
 
   
       

        </div>

        <h5 class="d-flex justify-content-center py-3">Quelle sera votre prochaine destination ?</h5>
        <div class="  d-flex justify-content-center">
            <div class=" shadow w-75 card  p-4 d-flex justify-content-center" >
                <form class="d-flex align-items-center"  role="search">
                    <label for="">Date</label>
                    <input class="form-control mx-2   " type="date"  aria-label="Search">
                    <label for="">Destination</label>
                    <input class="form-control mx-2" type="search" placeholder="Destination" aria-label="Search">
                    <button class="btn btn-outline-info mx-2 " type="submit">Search</button>
                  </form>
            </div>
          </div>
          <h3 class="d-flex justify-content-center w-100  py-4"> Offres</h3>
          <h4 class="d-flex justify-content-center w-100  p-2">Des promotions, des réductions et des offres spécialement pour vous</h4>
 
          <div class="d-flex justify-content-center">
          <button type="button" class="btn btn-white m-1 p-0" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          <div class="d-flex justify-content-center">
            <div class="card shadow" style="width: 14rem; ">
                <img src="/img/Casablanc.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title fst-italic">Casablanc</h5>
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5 fst-italic" id="staticBackdropLabel">Casablanc</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div  class=" d-flex justify-content-center "><img src="/img/Casablanc1.jpg" class="shadow " alt="..." style="width: 10rem; "></div>
                            
                            <p class=" d-flex justify-content-center fst-italic ">Casablanca est une destination touristique populaire au Maroc, 
                                offrant une richesse d'attractions pour les voyageurs. Cette ville dynamique située sur l'océan 
                                Atlantique est connue pour sa belle architecture, qui combine des styles traditionnels marocains et 
                                européens modernes. La Mosquée Hassan II, la place Mohammed V et la plage d'Aïn Diab sont
                                 des attractions incontournables pour tout visiteur.</p>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary"><a href="{{ url('/home') }}" class=" text-decoration-none text-white">Voyage</a></button>
                        </div>
                    </div>
                    </div>
                </div>
                <button type="button" class="btn btn-white m-1 p-0" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <div class="d-flex justify-content-center">
                      <div class="card shadow" style="width: 14rem; ">
                          <img src="/img/Marrakech .jpg" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title fst-italic">Marrakech</h5>
                          </button>
                          
                          <!-- Modal -->
                          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                  <h1 class="modal-title fs-5 fst-italic" id="staticBackdropLabel">Marrakech</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                      <div  class=" d-flex justify-content-center "><img src="/img/Casablanc1.jpg" class="shadow " alt="..." style="width: 10rem; "></div>
                                      
                                      <p class=" d-flex justify-content-center fst-italic ">Casablanca est une destination touristique populaire au Maroc, 
                                          offrant une richesse d'attractions pour les voyageurs. Cette ville dynamique située sur l'océan 
                                          Atlantique est connue pour sa belle architecture, qui combine des styles traditionnels marocains et 
                                          européens modernes. La Mosquée Hassan II, la place Mohammed V et la plage d'Aïn Diab sont
                                           des attractions incontournables pour tout visiteur.</p>
                                  </div>
                                  <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary"><a href="{{ url('/home') }}" class=" text-decoration-none text-white">Voyage</a></button>
                                  </div>
                              </div>
                              </div>
                          </div>
                          <button type="button" class="btn btn-white m-1 p-0" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <div class="d-flex justify-content-center">
                              <div class="card shadow" style="width: 14rem; ">
                                  <img src="/img/Essaouira.jpg" class="card-img-top" alt="...">
                                  <div class="card-body">
                                    <h5 class="card-title fst-italic">Essaouira</h5>
                                  </button>
                                  
                                  <!-- Modal -->
                                  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                          <h1 class="modal-title fs-5 fst-italic" id="staticBackdropLabel">Casablanc</h1>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                              <div  class=" d-flex justify-content-center "><img src="/img/Casablanc1.jpg" class="shadow " alt="..." style="width: 10rem; "></div>
                                              
                                              <p class=" d-flex justify-content-center fst-italic ">Casablanca est une destination touristique populaire au Maroc, 
                                                  offrant une richesse d'attractions pour les voyageurs. Cette ville dynamique située sur l'océan 
                                                  Atlantique est connue pour sa belle architecture, qui combine des styles traditionnels marocains et 
                                                  européens modernes. La Mosquée Hassan II, la place Mohammed V et la plage d'Aïn Diab sont
                                                   des attractions incontournables pour tout visiteur.</p>
                                          </div>
                                          <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                          <button type="button" class="btn btn-primary"><a href="{{ url('/home') }}" class=" text-decoration-none text-white">Voyage</a></button>
                                          </div>
                                      </div>
                                      </div>
                                  </div>
                                  <button type="button" class="btn btn-white m-1 p-0" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    <div class="d-flex justify-content-center">
                                      <div class="card shadow" style="width: 14rem; ">
                                          <img src="/img/Chefchaouen.jpg" class="card-img-top" alt="...">
                                          <div class="card-body">
                                            <h5 class="card-title fst-italic">Chefchaouen</h5>
                                          </button>
                                          
                                          <!-- Modal -->
                                          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                              <div class="modal-dialog">
                                              <div class="modal-content">
                                                  <div class="modal-header">
                                                  <h1 class="modal-title fs-5 fst-italic" id="staticBackdropLabel">Chefchaouen</h1>
                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                  </div>
                                                  <div class="modal-body">
                                                      <div  class=" d-flex justify-content-center "><img src="/img/Casablanc1.jpg" class="shadow " alt="..." style="width: 10rem; "></div>
                                                      
                                                      <p class=" d-flex justify-content-center fst-italic ">Casablanca est une destination touristique populaire au Maroc, 
                                                          offrant une richesse d'attractions pour les voyageurs. Cette ville dynamique située sur l'océan 
                                                          Atlantique est connue pour sa belle architecture, qui combine des styles traditionnels marocains et 
                                                          européens modernes. La Mosquée Hassan II, la place Mohammed V et la plage d'Aïn Diab sont
                                                           des attractions incontournables pour tout visiteur.</p>
                                                  </div>
                                                  <div class="modal-footer">
                                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                  <button type="button" class="btn btn-primary"><a href="{{ url('/home') }}" class=" text-decoration-none text-white">Voyage</a></button>
                                                  </div>
                                              </div>
                                              </div>
                                          </div>
                                          <button type="button" class="btn btn-white m-1 p-0" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                            <div class="d-flex justify-content-center">
                                              <div class="card shadow" style="width: 14rem; ">
                                                  <img src="/img/Rabat.jpg" class="card-img-top" alt="...">
                                                  <div class="card-body">
                                                    <h5 class="card-title fst-italic">Rabat</h5>
                                                  </button>
                                                  
                                                  <!-- Modal -->
                                                  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                      <div class="modal-dialog">
                                                      <div class="modal-content">
                                                          <div class="modal-header">
                                                          <h1 class="modal-title fs-5 fst-italic" id="staticBackdropLabel">Rabat</h1>
                                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                          </div>
                                                          <div class="modal-body">
                                                              <div  class=" d-flex justify-content-center "><img src="/img/Rabat.jpg" class="shadow " alt="..." style="width: 10rem; "></div>
                                                              
                                                              <p class=" d-flex justify-content-center fst-italic ">Casablanca est une destination touristique populaire au Maroc, 
                                                                  offrant une richesse d'attractions pour les voyageurs. Cette ville dynamique située sur l'océan 
                                                                  Atlantique est connue pour sa belle architecture, qui combine des styles traditionnels marocains et 
                                                                  européens modernes. La Mosquée Hassan II, la place Mohammed V et la plage d'Aïn Diab sont
                                                                   des attractions incontournables pour tout visiteur.</p>
                                                          </div>
                                                          <div class="modal-footer">
                                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                          <button type="button" class="btn btn-primary"><a href="{{ url('/home') }}" class=" text-decoration-none text-white">Voyage</a></button>
                                                          </div>
                                                      </div>
                                                      </div>
                                                  </div>

         
                                                </div>

                                                 
                                                 
                                                     <h4 class="d-flex justify-content-center w-100  py-5">Profiter </h4>
                                                 <h3 class="d-flex justify-content-center w-100 ">Voyager avec nous c'est profiter de :</h3>
                                                 <p class="d-flex justify-content-center w-100 p-4 fst-italic ">En tant qu'agence de voyage, nous pouvons vous offrir une expérience
                                                     de voyage unique et mémorable, avec de nombreux avantages pour les voyageurs. Nous travaillons 
                                                    avec vous pour créer un itinéraire de voyage personnalisé qui répond à vos besoins et à vos intérêts.
                                                    Nous travaillons également avec des hébergements 
                                                    de qualité pour vous assurer un séjour confortable et agréable, et nous vous offrons l'opportunité de déguster 
                                                    la cuisine locale délicieuse et authentique. Nous vous offrons également la possibilité de découvrir la culture locale, 
                                                    la tradition et le patrimoine,
                                                     et nous offrons des transports de qualité pour vous garantir un voyage confortable et en toute sécurité.</p>
                                                   
                                                 <div class=" d-flex justify-content-center w-100 row">
                                                    <div class="p-2 d-flex flex-column align-items-center col-3" >
                                                        <img class="rounded-circle"  src="/img/money.jpg" style="width: 75%; "/>
                                                        <p>  Meilleur Prix garanti</p>
                                                     </div>
                                                     <div class="p-2 d-flex flex-column align-items-center col-3" >
                                                        <img class="rounded-circle"  src="/img/uniqe.jpg" style="width: 75%; "/>
                                                        <p>Une expérience de voyage unique </p>
                                                     </div>
                                                     <div class="p-2 d-flex flex-column align-items-center col-3" >
                                                        <img class="rounded-circle" src="/img/tronsport.jpg" style="width: 75%; " />
                                                        <p> Des transports de qualité</p>
                                                     </div>
                                                     <div class="p-2 d-flex flex-column align-items-center col-3" >
                                                        <img class="rounded-circle" src="/img/hotel.jpg" style="width: 75%; "  />
                                                        <p> Des hébergements de qualité pour vous</p>
                                                     </div>
                                                 </div>
                                                 
                                                 <h4 class="d-flex justify-content-center w-100  py-5">Voyage à l'étranger </h4>
                                                 <h3 class="d-flex justify-content-center w-100 ">Nos packages Disponible toute l'année 2023  </h3>
                                                    <p class="d-flex justify-content-center w-100 p-4 c ">Bienvenue à notre agence de voyage pour découvrir la Turquie ou Balien 2023! Nous sommes fiers de vous présenter nos d
                                                        ifférents packages pour vous permettre de découvrir les merveilles de 
                                                        ce pays fascinant.</p>
                                                 <div class="card m-5" style="background:rgb(252, 242, 232) ">
                                                    
                                                    <div class=" shadow card-body border border-danger-subtle d-flex justify-content-center w-100">
                                                        <div class="w-25"> <img class="border border-danger-subtle shadow rounded"  src="/img/turq.jpg" style="width: 100%; "/></div>
                                                        <div class="w-75"> <h4 class="card-title d-flex justify-content-center px-5" style="color: rgb(241, 16, 16)">Nos packages Turquie 2023</h4>
                                                            <h5 class="d-flex justify-content-end px-5" style="color:rgb(149, 146, 88) ">8 jours 7 nuits</h5>

                                                            <p class="card-text px-5" style="color: rgb(241, 16, 16)">à-partir de   6999DHs / 1 personne</p>
                                                            <p class="card-text px-5  fst-italic">Nos packages incluent des visites de plusieurs villes et sites touristiques, 
                                                                ainsi que des activités culturelles et de loisirs pour rendre votre voyage inoubliable. 
                                                                Vous pouvez choisir parmi nos différents packages en fonction de vos préférences et de votre budget
                                                              Si vous êtes à la recherche d'une expérience gastronomique unique, 
                                                                nous vous proposons des packages qui vous permettent de découvrir la cuisine turque authentique,
                                                                 des visites culinaires et des dégustations de vin.
                                                                </p>

                                                            <a href="#" class="btn btn-outline-danger mx-5" style="rgb(231, 230, 216)">Découvrir</a></div>
                                                     
                                                    </div>
                                                  </div>

                                                  <div class="card m-5" style="background:rgb(231, 230, 216) ">
                                                    
                                                    <div class=" shadow card-body border border-success d-flex justify-content-center w-100">
                                                      
                                                        <div class="w-75"> <h4 class="card-title d-flex justify-content-center px-5" style="color: rgb(241, 16, 16)">Nos packages Bali 2023</h4>
                                                            <h5 class="d-flex justify-content-end px-5" style="color:rgb(149, 146, 88) ">8 jours 7 nuits</h5>

                                                            <p class="card-text px-5" style="color: rgb(241, 16, 16)">à-partir de  16999DHs  / 1 personne</p>
                                                            <p class="card-text px-5  fst-italic">Ce forfait vous emmène à la découverte des trésors cachés de Bali, 
                                                                des rizières en terrasses à couper le souffle, des temples antiques et des villages traditionnels. 
                                                                Profitez d'une journée de détente à la plage de Kuta, célèbre pour ses vagues et ses couchers de soleil spectaculaires.
                                                                 Vous séjournerez dans des hébergements de qualité supérieure avec petit-déjeuner inclus et aurez l'occasion de goûter 
                                                                 à la cuisine locale.
                                                                </p>

                                                            <a href="#" class="btn btn-outline-success mx-5" style="background:)">Découvrir</a></div>
                                                     
                                                            <div class="w-25"> <img class="border border-success shadow rounded"  src="/img/bali.jpg" style="width: 100%; "/></div>
                                                    </div>
                                                    
                                                  </div>
                                         
                                                  <h4 class="d-flex justify-content-center w-100  py-5">Hotel</h4>
                                                  
                                                  <div class="d-flex justify-content-center w-100 ">
                                                    <img  class="p-3" src="img/radisson.png" alt="" style="width: 20%; ">
                                                    <img  class="p-3" src="img/sofitel.png" alt="" style="width: 20%; ">
                                                    <img class="p-3" src="img/hotelC.png" alt="" style="width: 20%; ">
                                                    <img class="p-3" src="img/Novotel.png" alt="" style="width: 20%; ">
                                                  </div>
                                                  <h4 class="d-flex justify-content-center w-100  py-5">Tronsport</h4>
                                                  
                                                  <div class="d-flex justify-content-center w-100 ">
                                                    <img  class="p-3" src="img/ct.jpg" alt="" style="width: 20%; ">
                                                    <img  class="p-3" src="img/Al-Boraq.jpg" alt="" style="width: 20%; ">
                                                    <img  class="p-3" src="img/ONCF.png" alt="" style="width: 20%; ">
                                                    <img class="p-3" src="img/Ryanair.jpg" alt="" style="width: 20%; ">
                                                    <img class="p-3" src="img/Royal_Air_Maroc_Logo.png" alt="" style="width: 20%; ">
                                                  </div>
                                                  <footer class="bg-light text-center text-white">
                                                  
                                                    <div class="container p-4 pb-0">
                                                     
                                                      <section class="mb-4">
                                                
                                                        <a
                                                          class="btn text-white btn-floating m-1"
                                                         
                                                          href="#!"
                                                          role="button"
                                                          ><img src="https://img.icons8.com/color/50/null/youtube-play.png"/></a>

                                                        
                                                        <a class="btn text-white btn-floating m-1"
                                                          href="#!"
                                                          role="button"
                                                          ><img src="https://img.icons8.com/color/48/null/twitter--v1.png"/></a>
                                                                                                               
                                                        <a
                                                          class="btn text-white btn-floating m-1"
                                                          
                                                          href="#!"
                                                          role="button"
                                                          ><img src="https://img.icons8.com/color/48/null/instagram-new--v1.png"/></a>
        
                                                        <a class="btn text-white btn-floating m-1"
                                                          href="#!"
                                                          role="button"
                                                          ><img src="https://img.icons8.com/fluency/48/null/facebook-new.png"/></a>
                                                    
                                                        <a class="btn text-white btn-floating m-1"
                                                          href="#!"
                                                          ><img src="https://img.icons8.com/3d-fluency/50/null/gmail.png"/></a>
                                                      </section>
                                                     
                                                    </div>
                                                  
                                                    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                                                      © 2020 Copyright:
                                                      
                                                    </div>
                                                  
                                                  </footer>
                



              
          
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
@endsection
