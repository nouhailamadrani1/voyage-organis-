@extends('layouts.sidebar')
@section('content')
        
    <div class="mt-4 p-4">   
        <form method="POST" action="{{ route('transports.update', $transport->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="p-1 bg-success m-3 bg-opacity-10 p-2 border border-success border-2 rounded-4 shadow">
                <h6 class="d-flex justify-content-center m-2 mb-3 fw-semibold text-success">Modifier le Transport</h6>
                <div class="hr border border-success border-1"></div>
                <div class="d-flex justify-content-evenly">
                    <div class="mb-3 mx-1">
                        <label for="nom" class="form-label fw-semibold">Nom</label>
                        <input type="text" class="form-control border border-success border-2 rounded-4 shadow" name="nom" value="{{ $transport->nom }}">
                    </div>
        
                    <div class="mb-3">
                        <label for="nombre_passagers" class="form-label fw-semibold">Nombre Passagers</label>
                        <input type="number" class="form-control border border-success border-2 rounded-4 shadow" name="nombre_passagers" value="{{ $transport->nombre_passagers }}">
                    </div>
                </div>
        
                <div class="mb-3">
                    <label for="prix" class="form-label fw-semibold">Prix</label>
                    <input type="number" class="form-control border border-success border-2 rounded-4 shadow" name="prix" value="{{ $transport->prix }}">
                </div>
                <div class="mb-3 m-2">
                    <label for="description" class="form-label fw-semibold">Description</label>
                    <textarea class="form-control border border-success border-2 rounded-4 shadow" name="description" rows="3">{{ $transport->description }}</textarea>
                </div>
        
                <div class="mb-3 m-2">
                    <label for="image" class="form-label fw-semibold">Image</label>
                    <input type="file" class="form-control border border-success border-2 rounded-4 shadow" name="image">
                    <small class="form-text text-muted">Laissez vide pour conserver l'image actuelle</small>
                </div>
        
                <div class="mb-3 d-flex justify-content-center">
                    <button type="submit" class="btn btn-success px-3 border-2 rounded-4 shadow fw-semibold">Enregistrer les modifications</button>
                </div>
            </div>
        </form>
        
    </div>
    @endsection