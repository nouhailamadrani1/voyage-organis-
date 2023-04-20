         {{--  --}}
@extends('layouts.sidebar')
@section('content')
        
    <div class="mt-4 p-4">   
              <form method="POST" action="{{ route('hotel.update', $hotel->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="p-1 bg-warning m-3 bg-white p-2 border border-warning border-2 rounded-4 shadow">
            <h6 class="d-flex justify-content-center m-2 mb-3 fw-semibold text-warning">Modifier un Hotel</h6>
            <div class="hr border border-warning border-1"></div>
            <div class="d-flex justify-content-evenly">
                <div class="mb-3 mx-1">
                    <label for="nom" class="form-label fw-semibold">Nom</label>
                    <input type="text" class="form-control border border-warning border-2 rounded-4 shadow" name="nom" value="{{ $hotel->nom }}" required>
                </div>
    
                <div class="mb-3 ">
                    <label for="ville" class="form-label fw-semibold">Ville</label>
                    <input type="text" class="form-control border border-warning border-2 rounded-4 shadow" name="ville" value="{{ $hotel->ville }}" required>
                </div>
            </div>
            <div class="d-flex justify-content-evenly">
                <div class="mb-3 mx-1">
                    <label for="pays" class="form-label fw-semibold">Pays</label>
                    <input type="text" class="form-control border border-warning border-2 rounded-4 shadow" name="pays" value="{{ $hotel->pays }}" required>
                </div>
                <div class="mb-3">
                    <label for="nbre_etoiles" class="form-label fw-semibold">Nbre etoiles</label>
                    <input type="number" class="form-control border border-warning border-2 rounded-4 shadow" name="nbre_etoiles" value="{{ $hotel->nbre_etoiles }}" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="prix" class="form-label fw-semibold">prix</label>
                <input type="number" class="form-control border border-warning border-2 rounded-4 shadow" name="prix" value="{{ $hotel->prix }}" required>
            </div>
    
    
            <div class="mb-3 m-2">
                <label for="description" class="form-label fw-semibold">Description</label>
                <textarea class="form-control border border-warning border-2 rounded-4 shadow" name="description" rows="3">{{ $hotel->description }}</textarea>
            </div>
            <div class="mb-3 m-2">
                <label for="image" class="form-label fw-semibold">Image</label>
                <input type="file" class="form-control border border-warning border-2 rounded-4 shadow" name="image">
            </div>
            <div class="mb-3 d-flex justify-content-center">
                <button type="submit" class="btn btn-warning px-3 border-2 rounded-4 shadow fw-semibold">Modifier</button>
            </div>
        </div>
    </form></div>
           @endsection
 
         
                         {{--  --}}
                         