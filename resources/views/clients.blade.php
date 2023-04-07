@extends('layouts.sidebar')

@section('content')
<div class="m-0 p-0">
    <div class="d-flex justify-content-center px-3 " >
        <h5>Bienvenue  <b  class="text-danger">Nouhaila</b> sur votre Dashboard !!</h5>
        </div>
       <div class="d-flex justify-content-center flex-wrap">
        <div class=" p-1 m-3 bg-dangerbg-opacity-10   border border-danger border-2 rounded-4 shadow  " >
         
            <h6 class="d-flex justify-content-center text-danger p-2">Les Blogs</h6>
            <div class="hr border border-danger border-1 	"></div>
            <table class="table ">
             
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Profile</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Email</th>
                    <th scope="col">N° de réservation</th>
                    <th scope="col">N° de post</th>
                    <th scope="col">N° de commentaire</th>

                    <th scope="col">Action</th>
                   
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td><img src="img/profile.jpeg" class="" alt="" style="width: 50px ; hight: 50px"></td>
                    <td>nohaila</td>
                    <td>nouhailamadrani@gmail.com </td>
                    
                    <td>4</td>
                    <td>3</td>
                    <td>4</td>
                    <td><a href="#"><img src="https://img.icons8.com/ios-glyphs/20/f11010/delete-forever.png"/></a>
                        <a href="#"><img src="https://img.icons8.com/ios-glyphs/20/2bef42/vision.png"/></a>
                    </td>
                    
                  </tr>
                 
              
                </tbody>
              </table>
        </div>
   




</div>
@endsection
