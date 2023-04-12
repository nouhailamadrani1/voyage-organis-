@extends('layouts.sidebar')

@section('content')
<div class="m-0 p-0">
    <div class="d-flex justify-content-center px-3 " >
        <h5>Bienvenue  <b  class="text-warning">Nouhaila</b> sur votre Dashboard !!</h5>
        </div>
       <div class="d-flex justify-content-center flex-wrap">
        <div class=" p-1 m-3 bg-warning bg-opacity-10   border border-warning border-2 rounded-4 shadow  " >
         
            <h6 class="d-flex justify-content-center text-warning p-2">Les Blogs</h6>
            <div class="hr border border-warning border-1 	"></div>
            <table class="table ">
             
                <thead>
                
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Numero</th>
                    <th scope="col">Hotel</th>
                    <th scope="col">reserve</th>
                    <th scope="col">Image</th>
                    <th scope="col">Type</th>
                    <th scope="col">Action</th>
                   
                  </tr>
                </thead>
                <tbody>
                  <tr>
                   
                    <th scope="row"></th>
                    <td></td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td><img  src="images/" class="" alt="" style="width: 50px ; hight: 50px"></td>
                  

                      <td class="d-flex">
                        <form class="" action="" method="post">
                     
                         <button class=" btn btn" type="submit"> <img src="https://img.icons8.com/ios-glyphs/20/f11010/delete-forever.png"/></button>
                     </form>
                     <form class="" action="" method="post">
                     
                       <button class=" btn btn" type="submit"> <img src="https://img.icons8.com/ios-glyphs/20/41ef1f/vision.png"/></button>
                   </form>
                  
                   <form class="" action="" method="post">
                   
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
        <form  method="POST" action="" enctype="multipart/form-data">
          @csrf
        <div  class="  p-1 bg-danger m-3 bg-opacity-10 p-2  border border-danger border-2 rounded-4 shadow" >
            <h6 class="d-flex justify-content-center m-2 mb-3 fw-semibold text-danger ">Ajouter une chambre</h6>
            <div class="hr border border-danger border-1 	"></div>
            <div class="mb-3 mx-1">
                <label for="hotel-list">Sélectionnez un hôtel :</label>

                <select id="hotel-list" class="form-select border border-danger border-2 rounded-4 shadow" name="hotel_id">
                  <option value="hotel-1">Hôtel 1</option>
                  <option value="hotel-2">Hôtel 2</option>
                  <option value="hotel-3">Hôtel 3</option>
                  <option value="hotel-4">Hôtel 4</option>
                </select>
            </div>
            
            <div class="mb-3 mx-1">
                <label for="exampleFormControlInput1" class="form-label fw-semibold">Numero</label>
                <input type="text" class="form-control border border-danger border-2 rounded-4 shadow" name="title">
            </div>

              <div class="mb-3 m-2">
                <label  class="form-label fw-semibold">Nombre de lits</label>
                <select id="hotel-list" class="form-select border border-danger border-2 rounded-4 shadow" name="nbre_lits">
                    <option value="1">1</option>
                    <option value="2">2</option>
                 
                  </select>              </div>
              <div class="mb-3 m-2">
                <label class="form-label fw-semibold">description</label>
                <textarea class="form-control border border-danger border-2 rounded-4 shadow" name="description" rows="3"></textarea>
              </div>
              <div class="mb-3 m-2">
                <label  class="form-label fw-semibold">réserve</label>

                <select id="réserve"  class="form-select border border-danger border-2 rounded-4 shadow" name="bool">
                  <option value="true">Réserve</option>
                  <option value="false">No Réserve</option>
                </select>
            </div>
              <div class="mb-3 m-2">
                <label  class="form-label fw-semibold">Image</label>
                <input type="file" class="form-control border border-danger border-2 rounded-4 shadow" name="image1">
              </div>
              <div class="mb-3 m-2">
                <label for="exampleFormControlInput1" class="form-label fw-semibold">Image</label>
                <input type="file" class="form-control border border-danger border-2 rounded-4 shadow" name="image2">
              </div>
              <div class="mb-3 m-2">
                <label for="exampleFormControlInput1" class="form-label fw-semibold">Image</label>
                <input type="file" class="form-control border border-danger border-2 rounded-4 shadow" name="image3">
              </div>
              <div class="mb-3 m-2">
                <label for="exampleFormControlInput1" class="form-label fw-semibold">Image</label>
                <input type="file" class="form-control border border-danger border-2 rounded-4 shadow" name="image4">
              </div>
              <div class="mb-3  d-flex justify-content-center">
              <button type="submit" class="btn btn-danger px-3  border-2 rounded-4 shadow fw-semibold  ">Ajouter</button>
            </div>
        </div>
        </form>
       </div>





</div>
@endsection
