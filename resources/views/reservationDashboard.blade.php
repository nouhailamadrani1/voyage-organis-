
@extends('layouts.sidebar')

@section('content')
<div class="m-0 p-0">
    <div class="d-flex justify-content-center px-3 " >
        <h5>Bienvenue  <b  class="text-danger">Nouhaila</b> sur votre Dashboard !!</h5>
        </div>
       <div class="d-flex justify-content-center flex-wrap">
        <div class=" p-1 m-3 bg-dangerbg-opacity-10   border border-danger border-2 rounded-4 shadow  " >
         
            <h6 class="d-flex justify-content-center text-danger p-2">reservation</h6>
            <div class="hr border border-danger border-1 	"></div>
            
            <table class="table ">
             
                <thead>
                  <tr>
                    <th scope="col">#id </th>
                    <th scope="col">Voyage Id</th>
                    <th scope="col">Nom de Client</th>
                    <th scope="col">Prix Totale</th>
               
                   
                  </tr>
                </thead>
                <tbody>
                  @foreach ($reservations  as  $reservation)
                  <tr>
                    <th scope="row">{{ $reservation->id }}</th>
                    <td>{{ $reservation->voyage_id }}</td>
                    <td>{{ $reservation->clientNom }}</td>
                    <td>{{ $reservation->prix_totale }}</td>
                 
                    
                    
                  </tr>
                  @endforeach
              
                </tbody>
              </table>
        </div>
       
       </div>





</div>

@endsection
