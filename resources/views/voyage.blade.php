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

<div class="d-flex  justify-content-center">

    <div class="d-flex  justify-content-between align-items-center w-50">
        <div class="accordion " id="accordionPanelsStayOpenExample">
        <div class="accordion-item ">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
              Voyage
            </button>
          </h2>
          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
            <div class="accordion-body ">
    
                <div class="row">
                    <div class="col-4 mb-3 mb-sm-0">
                      <div class="card border-0">
                        <div class="card-body">
                          <h5 class="card-title">Casablanca</h5>
                          <img src="img/tanger123.jpg" style="width: 100%">
                          <img src="img/tanger123.jpg" style="width: 100%">
                          <img src="img/tanger123.jpg" style="width: 100%">
                        
                          
                        </div>
                      </div>
                    </div>
                    <div class="col-7">
                      <div class="card border-0">
                        <div class="card-body">
                          <h5 class="card-title">Voyage avec nous</h5>
                          
                          <p class="card-text " style="width: 40ch">Durant ce circuit villes impériales du Maroc partant de Casablanca, vous parcourez le cœur du Maroc : après la capitale et sa célèbre corniche, découvrez les unes après les autres les villes royales, Rabat et son charme provincial, Fès, la très ancienne et très illustre capitale spirituelle du Royaume, choyée des Mérinides (XIIIe-XIVe), Meknès, le « Versailles » de Moulay Ismail (XVIIe) et ses monuments imposants.
                            Traversez le Moyen Atlas, appréciez la verdure et la fraîcheur d’Ifrane et de Beni-Mellal, et abordez Marrakech, la « perle du Sud » bientôt millénaire qu’on ne présente plus. Retour à Casablanca où vous découvrirez la majestueuse mosquée Hassan II..</p>
                       
                        </div>
                      </div>
                    </div>
                  </div>
    
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
             Hotel
            </button>
          </h2>
          <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
            <div class="accordion-body">
              <div class="d-flex  ">
                         <img src="img/novo1.jpg" style="width: 45%">
                <div class="p-2">  
                    <h5 class="card-title">Novotel</b><span><img src="https://img.icons8.com/3d-fluency/20/null/star.png"/> (4)</span> </h5>
                    <p class="fw-light"><b>Ville:</b>Casablanca <b></p>
                        <p class="fw-light"><b>Pays:</b>Maroc<b></p>
                  </div>
        
              </div>
              
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
              Tronsport
            </button>
          </h2>
          <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
            <div class="accordion-body">
              <div class="d-flex">
                <div>  <h6 class="my-0"><b>Mercedes-Benz Sprinter</b></p>
                    <p class="fw-light my-0"><b>Nombre passagers:</b>16</p>
                    <p class="fw-light my-0"><b>De puis:</b> Marrakech</p>
                    <p class="fw-light my-0"><b>Pour :</b> Tanger</p>
                    <p class="fw-light my-0"><b>Heure départ :</b>14:11:00</p>
                    <p class="fw-light my-0"><b>Heure arrivee :</b> 20:05:00</p>
                    <p class="fw-light my-0"><b>Date départ :</b>2023-04-30</p>
                    <p class="fw-light my-0"><b>Date arrivee :</b> 2023-05-07</p></div>
                    <img src="img/mercedes-van-1.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div></div>
      
    
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
</script>
@endsection