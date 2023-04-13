@extends('layouts.sidebar')

@section('content')
<div class="m-0 p-0">
    <div class="d-flex justify-content-center px-3 " >
        <h5>Bienvenue  <b style="color:rgb(13, 111, 229);">Nouhaila</b> sur votre Dashboard !!</h5>
        </div>
       <div class="d-flex justify-content-center flex-wrap">
        <div class=" p-1 m-3 bg-primary bg-opacity-10   border border-primary border-2 rounded-4 shadow shadow-primary " >
         
            <h6 class="d-flex justify-content-center text-primary p-2">Les Hotels</h6>
            <div class="hr border border-primary border-1 	"></div>
            <table class="table ">
             
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Ville</th>
                    <th scope="col">N° Etoiles</th>
                    <th scope="col">N° Chambre</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                   
                  </tr>
                </thead>

                <tbody>
                
                  <tr>

                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td><img src="https://img.icons8.com/ios-filled/15/ffd50a/star--v1.png" class="px-1"/></td>
                    <td></td>
                    
                    <td><img src="images/" class="" alt="" style="width: 50px ; hight: 50px"></td>
                    <td class="d-flex">
                   <form class="" action="" method="post">
                    @csrf
                    @method('DELETE')
                    <button class=" btn btn" type="submit"> <img src="https://img.icons8.com/ios-glyphs/20/f11010/delete-forever.png"/></button>
                </form>
                <form class="" action="" method="post">
                  @csrf
                  @method('DELETE')
                  <button class=" btn btn" type="submit"> <img src="https://img.icons8.com/ios-glyphs/20/41ef1f/vision.png"/></button>
              </form>
              <form class="" action="" method="post">
                @csrf
                @method('DELETE')
                <button class=" btn btn" type="submit"> <img src="https://img.icons8.com/ios-glyphs/20/007bff/edit-row.png"/></button>
            </form>
                        
                    </td>
                    
                  </tr>
                    

              
                </tbody>
              </table>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        <form  method="POST" action="{{ route('voyageDashboard.store') }}" enctype="multipart/form-data">
          @csrf
        <div  class="  p-1 bg-warning m-3 bg-opacity-10 p-2  border border-warning border-2 rounded-4 shadow" >
            <h6 class="d-flex justify-content-center m-2 mb-3 fw-semibold text-warning ">Organisé un voyage</h6>
            <div class="hr border border-warning border-1 	"></div>
            <div class="d-flex justify-content-evenly">
                <div class="mb-3 mx-1">
                    <label for="exampleFormControlInput1" class="form-label fw-semibold">Titre de voyage</label>
                    <input type="text" class="form-control border border-warning border-2 rounded-4 shadow" name="titre">
                  </div>
                  
                
            </div>
           
                <div class="mb-3 mx-1">
                    <label for="exampleFormControlInput1" class="form-label fw-semibold">Pays</label>
                    <input type="text" class="form-control border border-warning border-2 rounded-4 shadow" name="pays">
                  </div>
                  <div  class="d-flex justify-content-evenly">
                    <div class="mb-3 mx-1">
                        <label for="exampleFormControlInput1" class="form-label fw-semibold">De puis</label>
                        <input type="text" class="form-control border border-success border-2 rounded-4 shadow" name="depuis">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label fw-semibold">Pour</label>
                        <input type="text" class="form-control border border-success border-2 rounded-4 shadow" name="pour">
                      </div>
                   </div>
                   <div  class="d-flex justify-content-evenly">
                    <div class="mb-3 mx-1">
                        <label for="exampleFormControlInput1" class="form-label fw-semibold">Date de départ</label>
                        <input type="date" class="form-control border border-success border-2 rounded-4 shadow" name="date_de_départ">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label fw-semibold">Date de l'arrivee</label>
                        <input type="date" class="form-control border border-success border-2 rounded-4 shadow" name="date_arrivee">
                      </div>
                   </div>
                   <div  class="d-flex justify-content-evenly">
                    <div class="mb-3 mx-1">
                        <label for="exampleFormControlInput1" class="form-label fw-semibold">Heure de départ</label>
                        <input type="time" class="form-control border border-success border-2 rounded-4 shadow" name="heure_de_départ">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label fw-semibold">Heure de l'arrivee</label>
                        <input type="time" class="form-control border border-success border-2 rounded-4 shadow" name="heure_arrivee">
                      </div>
                   </div>
                   <div class="mb-3">
                   <select id="hotel-list" class="form-select border border-warning border-2 rounded-4 shadow" name="hotel_id">
                    @foreach ($hotels as $hotel)
                        
                   
                    <option value="{{ $hotel->id }}">{{ $hotel->nom }}</option>
                    @endforeach
                  </select>
                   </div>
                   <div class="mb-3">
                  <select class="form-select mb-3 mx-1 border border-warning border-2 rounded-4 shadow" name="transport_id">
                    @foreach ($transports as $transport)
                        
                   
                    <option value="{{ $transport->id }}">{{ $transport->nom }}passagers : ({{ $transport->nombre_passagers }})</option>
                    @endforeach
                  </select>
                   </div>
                  <select class="form-select mb-3 mx-1 border border-warning border-2 rounded-4 shadow" name="nombre_place">
                    
                    <option value="4">4 place</option>
                    <option value="16">16 places</option>
                    <option value="20">20 places</option>
                    <option value="26">26 places</option>
                    <option value="30">30 places</option>
                  </select>
                    <div class="mb-3 m-2">
                <label for="exampleFormControlInput1" class="form-label fw-semibold">Image</label>
                <input type="file" class="form-control border border-success border-2 rounded-4 shadow" name="image">
              </div>
                 
                 <div class="mb-3 mx-1">
                    <label for="exampleFormControlInput1" class="form-label fw-semibold">Description</label>
                    <textarea type="text" class="form-control border border-warning border-2 rounded-4 shadow" name="description"></textarea>
                  </div> 
              
        
              <div class="mb-3  d-flex justify-content-center">
              <button type="submit" class="btn btn-warning px-3  border-2 rounded-4 shadow fw-semibold  ">Ajouter</button>
            </div>
        </div>
        </form>
       </div>





</div>
@endsection
