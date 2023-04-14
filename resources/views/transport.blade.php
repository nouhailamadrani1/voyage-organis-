@extends('layouts.sidebar')

@section('content')
<div class="m-0 p-0">
    <div class="d-flex justify-content-center px-3 " >
        <h5>Bienvenue  <b  class="text-danger">Nouhaila</b> sur votre Dashboard !!</h5>
        </div>
       <div class="d-flex justify-content-center flex-wrap">
        <div class=" p-1 m-3 bg-dangerbg-opacity-10   border border-danger border-2 rounded-4 shadow  " >
         
            <h6 class="d-flex justify-content-center text-danger p-2">Les Tronsports</h6>
            <div class="hr border border-danger border-1 	"></div>
            <table class="table ">
             
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">De puis</th>
                    <th scope="col">Pour</th>
                    <th scope="col">Nombre Passagers</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                   
                  </tr>
                </thead>
                <tbody>
                  @foreach ($transports as $transport)
                  <tr>
                    <th scope="row">{{ $transport->id }}</th>
                    <td>{{ $transport->nom }}</td>
                    <td>{{ $transport->depuis }}</td>
                    <td>{{ $transport->pour }}</td>
            
                    

                    <td>{{ $transport->nombre_passagers }}</td>
                   
                    <td><img src="images/{{ ($transport->image) }}" class="" alt="" style="width: 50px ; hight: 50px"></td>
                    
                    <td>  <form class="" action="{{ route('transports.destroy', $transport->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button class=" btn btn" type="submit"> <img src="https://img.icons8.com/ios-glyphs/20/f11010/delete-forever.png"/></button>
                  </form>
                  <form class=""  method="post">
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
                  @endforeach
              
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
        <form  method="POST" action="{{ route('transports.store') }}" enctype="multipart/form-data">
          @csrf
        <div  class="  p-1 bg-success m-3 bg-opacity-10 p-2  border border-success border-2 rounded-4 shadow" >
            <h6 class="d-flex justify-content-center m-2 mb-3 fw-semibold text-success ">Ajouter un Transport</h6>
            <div class="hr border border-success border-1 	"></div>
            <div class="d-flex justify-content-evenly">
                <div class="mb-3 mx-1">
                    <label for="exampleFormControlInput1" class="form-label fw-semibold">Nom</label>
                    <input type="text" class="form-control border border-success border-2 rounded-4 shadow" name="nom">
                  </div>
                  
                  <div class="mb-3 ">
                    <label for="exampleFormControlInput1" class="form-label fw-semibold">Nombre Passagers</label>
                    <input type="number" class="form-control border border-success border-2 rounded-4 shadow" name="nombre_passagers">
                  </div>
            </div>
           
           <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label fw-semibold">Prix</label>
            <input type="number" class="form-control border border-success border-2 rounded-4 shadow" name="prix">
          </div>
          <div class="mb-3 m-2">
            <label for="exampleFormControlTextarea1" class="form-label fw-semibold">Description</label>
            <textarea  class="form-control border border-warning border-2 rounded-4 shadow" name="description" rows="3"></textarea>
          </div>
             
             

             
              <div class="mb-3 m-2">
                <label for="exampleFormControlInput1" class="form-label fw-semibold">Image</label>
                <input type="file" class="form-control border border-success border-2 rounded-4 shadow" name="image">
              </div>
              <div class="mb-3  d-flex justify-content-center">
              <button type="submit" class="btn btn-success px-3  border-2 rounded-4 shadow fw-semibold  ">Ajouter</button>
            </div>
        </div>
        </form>
       </div>





</div>
@endsection
