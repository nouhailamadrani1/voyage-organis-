
@extends('layouts.sidebar')
@section('content')


     <div class="d-flex justify-content-center p-3" >
  
     <h5>Bienvenue  <b style="color:rgb(13, 111, 229);">Nouhaila</b> sur votre Dashboard !!</h5>
     
     </div>


   
<div class=" d-flex justify-content-around flex-wrap m-1" >
  <div class="">

  <h4 class="my-1 d-flex justify-content-center pb-3">Statistiques</h4>
  <div class="d-flex justify-content-center flex-wrap ">
    <div class="card text-center  shadow bg-info bg-opacity-10 border border-info border-2 rounded  m-1" style="width: 10rem;">
      <div class="card-body">
        <img src="https://img.icons8.com/ios-filled/20/0000/user.png"/>
        <p class="card-title">Nombre d'utlisateurs</p>
        <p class="card-subtitle  text-body-secondary">{{$countUser}}</p>
      </div>
    </div>
    <div class="card text-center shadow   bg-success bg-opacity-10 border border-success border-2 rounded  m-1" style="width: 10rem;">
      <div class="card-body">
        <img src="https://img.icons8.com/ios-filled/20/0000/car.png"/>
      
        <p class="card-title"> Nombre des transports</p>
        <p class="card-subtitle  text-body-secondary">{{$countTransport}}</p>
        
      </div>
    </div>
    <div class="card text-center bg-danger  shadow  bg-opacity-10 border border-danger border-2 rounded m-1" style="width: 10rem;">
      <div class="card-body">
        <img src="https://img.icons8.com/ios-filled/20/0000/residence.png"/>
        <p class="card-title">Nombre des hôtels</p>
        <p class="card-subtitle  text-body-secondary">{{$countHotel}}</p>
      </div>
    </div>
    <div class="card text-center bg-warning  shadow  bg-opacity-10 border  border-warning border-2 rounded  m-1" style="width: 10rem;">
   
      <div class="card-body">
        <img src="https://img.icons8.com/ios-filled/20/0000/sunbathe.png"/>
        <p class="card-title">Nombre des voyages Organisés</p>
        <p class="card-subtitle  text-body-secondary">120</p>
      </div>
    </div>
    <div class="card text-center  bg-primary  shadow  bg-opacity-10 border border-primary border-2 rounded  m-1" style="width: 10rem;">
   
      <div class="card-body">
        <img src="https://img.icons8.com/ios-filled/20/0000/strategy-news.png"/>
        <p class="card-title">Nombre des publications</p>
        <p class="card-subtitle  text-body-secondary">{{$countBlog}}</p>
      </div>
    </div>
  </div>
  <div>
  
    <h4 class="my-1 d-flex justify-content-center p-3">hôtels</h4>
    <table class="table bg-danger bg-opacity-10">
      <thead>
        <tr >
          <th scope="col">#</th>
          <th scope="col">Nom</th>
          <th scope="col">Ville</th>
          <th scope="col">Nbre etoiles</th>
          <th scope="col">Image</th>
        </tr>
      </thead>
      <tbody class="table-group-divider " >
        
        @foreach ($hotels as $hotel)
            
       
        <tr>
          <th scope="row">{{$hotel->id}}</th>
          <td>{{$hotel->nom}}</td>
          <td>{{$hotel->ville}}</td>
          <td>{{$hotel->nbre_etoiles}}</td>
         
          <td><img src="images/{{$hotel->image}}" class="" alt="" style="width: 50px ; hight: 50px"></td>

        </tr>
        @endforeach
       
      </tbody>
    </table>
  </div>
  <div>
  
    <h4 class="my-1 d-flex justify-content-center p-3"> Publications</h4>
    <table class="table bg-primary bg-opacity-10">
      <thead>
        
        <tr >
          <th scope="col">#</th>
          <th scope="col">titre</th>
          <th scope="col">éditeur</th>
          <th scope="col">image</th>
        </tr>
      </thead>
      <tbody class="table-group-divider " >
        @foreach ($articles as $article)
            
        <tr>
          <th scope="row">{{$article->id}}</th>
          <td>{{$article->title}}</td>
          <td>{{$article->user->name}}</td>
          <td><img src="images/{{$article->image}}" class="" alt="" style="width: 50px ; hight: 50px"></td>
        </tr>
        @endforeach

        
      </tbody>
    </table>
  </div>
  <div>
  
    <h4 class="my-1 d-flex justify-content-center p-3"> Transports</h4>
    <table class="table bg-success bg-opacity-10">
      <thead>
        <tr >
          <th scope="col">#</th>
          <th scope="col">Nom</th>
          <th scope="col">De puis</th>
          <th scope="col">Pour</th>
          <th scope="col">Nombre passagers</th>
          <th scope="col">Image</th>
        </tr>
      </thead>
      <tbody class="table-group-divider " >
        @foreach ($transports as $transport)
            
    
        <tr>
          <th scope="row">{{$transport->id}}</th>
          <td>{{$transport->nom}}</td>
          <td>{{$transport->depuis}}</td>
          <td>{{$transport->pour}}</td>
          <td>{{$transport->nombre_passagers}}</td>
          <td><img src="images/{{$transport->image}}" class="" alt="" style="width: 50px ; hight: 50px"></td>
        </tr>
        @endforeach
        
       
      
      </tbody>
    </table>
  </div>
  <div>
  
    <h4 class="my-1 d-flex justify-content-center p-3"> Voyages Organisés</h4>
    <table class="table bg-warning bg-opacity-10">
      <thead>
        <tr >
          <th scope="col">#</th>
          <th scope="col">Nom</th>
          <th scope="col">Hotel</th>
          <th scope="col">Tronsport</th>
          <th scope="col">Nombre de voyageur</th>
          <th scope="col">Image</th>
        </tr>
      </thead>
      <tbody class="table-group-divider " >
        <tr>
          <th scope="row">1</th>
          <td>Marrakech</td>
          <td>Novotel</td>
          <td>casablanca</td>
          <td>40</td>
          <td><img src="img/Novotel.png" class="" alt="" style="width: 50px ; hight: 50px"></td>
        </tr>
      
       
      
      </tbody>
    </table>
  </div>
  
</div>
<div class="vr border border-primary border-1 	d-none d-lg-block"></div>
<div>
  
<h5 class="pb-3 d-flex justify-content-center ">Les clients</h5>
<div class="bg-info  bg-opacity-10 p-2  border border-primary border-2 rounded-4 shadow  ">
  
@foreach ($users as $user)
    

  <div class=" d-flex justify-content-start align-items-center  px-2">
    <img src="images/{{$user ->image}}" class="rounded" alt="" style="width: 25px ; hight: 25px">
    <h6 class="px-2  fst-italic">{{$user ->name}}</h6>
  </div>
    <hr class=" border border-primary border-1">
    @endforeach
    
</div>
</div>
</div>
      
 
    

       
      



  
        

@endsection