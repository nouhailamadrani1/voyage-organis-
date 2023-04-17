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
            <div class="table-responsive">
              <form action="{{ route('hotel.index') }}" method="GET" class="d-flex justify-content-between m-2">
                <input type="text" class="form-control " name="search" value="{{ $searchTerm }}" placeholder="chercher par nom hôtel">
                <button type="submit" class="btn btn-white text-primary">Search</button>
            </form>
            <table class="table ">
             
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Ville</th>
                    <th scope="col">N° Etoiles</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                   
                  </tr>
                </thead>

                <tbody>
                  @foreach ($hotels as $hotel)
                  <tr>

                    <th scope="row">{{ $hotel->id }}</th>
                    <td>{{ $hotel->nom }}</td>
                    <td>{{ $hotel->ville }}</td>
                    <td>{{ $hotel->nbre_etoiles }}<img src="https://img.icons8.com/ios-filled/15/ffd50a/star--v1.png" class="px-1"/></td>
                    
                    <td><img src="images/{{ ($hotel->image) }}" class="" alt="" style="width: 50px ; hight: 50px"></td>
                    <td class="d-flex">
                   <form class="" action="{{ route('hotel.destroy', $hotel->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class=" btn btn" type="submit"> <img src="https://img.icons8.com/ios-glyphs/20/f11010/delete-forever.png"/></button>
                </form>
                <form class="" action="{{ route('hotel.destroy', $hotel->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class=" btn btn" type="submit"> <img src="https://img.icons8.com/ios-glyphs/20/41ef1f/vision.png"/></button>
              </form>
              <form class="" action="{{ route('hotel.destroy', $hotel->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class=" btn btn" type="submit"> <img src="https://img.icons8.com/ios-glyphs/20/007bff/edit-row.png"/></button>
            </form>
                        
                    </td>
                    
                  </tr>
                             @endforeach

              
                </tbody>
              </table>
            </div>
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
        <form  method="POST" action="{{ route('hotel.store') }}" enctype="multipart/form-data">
          @csrf
        <div  class="  p-1 bg-warning m-3 bg-opacity-10 p-2  border border-warning border-2 rounded-4 shadow" >
            <h6 class="d-flex justify-content-center m-2 mb-3 fw-semibold text-warning ">Ajouter un Hotel</h6>
            <div class="hr border border-warning border-1 	"></div>
            <div class="d-flex justify-content-evenly">
                <div class="mb-3 mx-1">
                    <label for="exampleFormControlInput1" class="form-label fw-semibold">Nom</label>
                    <input type="text" class="form-control border border-warning border-2 rounded-4 shadow" name="nom">
                  </div>
                  
                  <div class="mb-3 ">
                    <label for="exampleFormControlInput1" class="form-label fw-semibold">Ville</label>
                    <input type="text" class="form-control border border-warning border-2 rounded-4 shadow" name="ville">
                  </div>
            </div>
           <div  class="d-flex justify-content-evenly">
            <div class="mb-3 mx-1">
                <label for="exampleFormControlInput1" class="form-label fw-semibold">Pays</label>
                <input type="text" class="form-control border border-warning border-2 rounded-4 shadow" name="pays">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label fw-semibold">Nbre etoiles</label>
                <input type="number" class="form-control border border-warning border-2 rounded-4 shadow" name="nbre_etoiles">
              </div>
           </div>
           <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label fw-semibold">prix</label>
            <input type="number" class="form-control border border-warning border-2 rounded-4 shadow" name="prix">
          </div>
             

              <div class="mb-3 m-2">
                <label for="exampleFormControlTextarea1" class="form-label fw-semibold">Description</label>
                <textarea  class="form-control border border-warning border-2 rounded-4 shadow" name="description" rows="3"></textarea>
              </div>
              <div class="mb-3 m-2">
                <label for="exampleFormControlInput1" class="form-label fw-semibold">Image</label>
                <input type="file" class="form-control border border-warning border-2 rounded-4 shadow" name="image">
              </div>
              <div class="mb-3  d-flex justify-content-center">
              <button type="submit" class="btn btn-warning px-3  border-2 rounded-4 shadow fw-semibold  ">Ajouter</button>
            </div>
        </div>
        </form>
       </div>





</div>
@endsection
