@extends('layouts.app')
<div class="m-0 p-0" style="background: #00235B">
@section('content')

<ul class="mx-4 nav nav-pills  nav-fill gap-2 p-1 small text-dark bg-white rounded-5 shadow-sm mt-5  fixed-top" id="pillNav2" role="tablist" style="--bs-nav-link-color: var(--bs-dark); --bs-nav-pills-link-active-color: var(--bs-white); --bs-nav-pills-link-active-bg: var(--bs-warning);">
    <li class="nav-item" >
        <a class="nav-link  rounded-5" href="{{ route('indexHome') }}">
            <img src="https://img.icons8.com/ios/15/null/home--v1.png" class="px-1"/>Accueil
        </a>
    </li>
    <li class="nav-item" >
        <a class="nav-link  rounded-5"  href="{{ route('articles.index') }}">
            <img src="https://img.icons8.com/ios/15/null/blogger.png" class="px-1"/>Blog
        </a>
    </li>
    <li class="nav-item" >
        <a class="nav-link active rounded-5"  href="{{ route('hotels') }}">
            <img src="https://img.icons8.com/ios-filled/15/null/5-star-hotel--v2.png" class="px-1"/>Hotel
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link rounded-5"  href="{{ route('transportClient') }}">
            <img src="https://img.icons8.com/ios-filled/15/null/airport-transfer.png" class="px-1"/>Transport
        </a>
    </li>
    <li class="nav-item" >
        <a class="nav-link rounded-5"  href="{{ route('voyageOrganise') }}">
            <img src="https://img.icons8.com/ios-filled/15/null/around-the-globe.png" class="px-1"/>Voyages Organisés
        </a>
    </li>
  </ul>


  <div class="mt-5">
    <div class="m-5 card border border-2 border-warning p-3">
      @if (session()->has('alert'))
            <div class=" mx-5 alert alert-success" role="alert">
                {{ session('alert') }}
            </div>
        @endif
        <div class="d-flex justify-content-between m-1 "> 
            <h5 class="my-2 fw-semibold">Profile</h5>
                <img  src="images/{{Auth::user()->image}} " style="width: 50px"></div>
                <form  action="{{ route('profile.update', ['id' => Auth::user()->id]) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                    <div class="mb-3">
                      <label for="name" class="form-label fw-semibold">Name</label>
                      <input type="text" class="form-control border  border-2 border-warning " name="name" id="name" value="{{ old('name', Auth::user()->name) }}">
                      @error('name')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label fw-semibold">Email address</label>
                      <input type="email" class="form-control border  border-2 border-warning " name="email" id="email" value="{{ old('email', Auth::user()->email) }}">
                      @error('email')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <input type="file"  class="d-none" id="actual-btn" class="form-control border  border-2 border-warning " name="image" id="image">
                     <label for="actual-btn"   class=" rounded-circle p-2 border border-warning border-2   " >
                    <img src="https://img.icons8.com/ios/50/ffc107/compact-camera.png"/></label><SPan class="text-warning mx-2">Changer profile</SPan>
                    
                     
                      @error('image')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                    <button type="submit" class="btn btn-warning">Update Profile</button>

                  </form>
                  <form class="d-flex justify-content-end" action="{{ route('profile.delete', ['id' => Auth::user()->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger text-white " type="submit">Supprimer profile</button>
                </form>
                  
        
        <a  href="{{ route('password.request') }}" class="text-decoration-none text-danger  border-0 border-2 border-bottom border-warning " style="width: 130px">Reset Password</a>

    </div>

  </div>

  
 
   <footer class=" text-center fw-medium text-lg-start   " style="background: #98DFD6">
    <div class="container p-4">
      <div class="row">
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
       
  
          <img src="logo.png" alt="" style="width: 200px ; hight: 200px">
          <p></p>
           
        </div>
  
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Liens utiles</h5>
  
          <ul class="list-unstyled mb-0">
            <li>
                <a class="nav-link rounded-5 p-1"  href="{{ route('voyageOrganise') }}">
                    <img src="https://img.icons8.com/ios-filled/20/null/around-the-globe.png" class="px-1"/>Voyages Organisés
                </a>
            </li>
            <li>
                <a class="nav-link rounded-5 p-1"  href="{{ route('transportClient') }}">
                    <img src="https://img.icons8.com/ios-filled/20/null/airport-transfer.png" class="px-1"/>Transport
                </a>
            </li>
            <li>
                <a class="nav-link rounded-5 p-1"  href="{{ route('hotels') }}">
                    <img src="https://img.icons8.com/ios-filled/20/null/5-star-hotel--v2.png" class="px-1"/>Hotel
                </a>
            </li>
            <li>
                <a class="nav-link rounded-5 p-1"  href="{{ route('articles.index') }}">
                    <img src="https://img.icons8.com/ios/20/null/blogger.png" class="px-1"/>Blog
                </a>
            </li>
          </ul>
        </div>
  
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Contactez-nous</h5>
  
          <ul class="list-unstyled text-start mb-0">
            <li class="d-flex align-items-center p-1">
                <img src="https://img.icons8.com/external-kmg-design-glyph-kmg-design/20/null/external-map-map-and-navigation-kmg-design-glyph-kmg-design-3.png"/> Jardins de la Palmeraie, Marrakech, Maroc
            </li>
            <li class="d-flex align-items-center p-1">
              
                <img src="https://img.icons8.com/ios-filled/20/null/apple-mail.png"/>   voyageOrganise@nmvoyage.com
            </li>
            <li class="d-flex align-items-center p-1 ">
                <img src="https://img.icons8.com/external-flatart-icons-solid-flatarticons/20/null/external-call-contact-us-flatart-icons-solid-flatarticons.png"/>
              + 212 6 656 453 567
            </li>
            <li class="d-flex align-items-center p-1 ">
                <img src="https://img.icons8.com/external-icongeek26-glyph-icongeek26/20/null/external-phone-retro-80s-icongeek26-glyph-icongeek26-1.png"/>
             + 212 7 789 432 650
            </li>
          </ul>
        </div>
      </div>
    </div>
  
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Mon entreprise :
      <a class="text-dark" href="https://mdbootstrap.com/">NMouHil.com</a>
    </div>
  </footer>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
</script>
@endsection