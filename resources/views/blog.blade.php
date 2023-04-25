@extends('layouts.app')

@section('content')
 
<ul class="mx-4 nav nav-pills  nav-fill gap-2 p-1 small text-dark bg-white rounded-5 shadow-sm mt-5  fixed-top" id="pillNav2" role="tablist" style="--bs-nav-link-color: var(--bs-dark); --bs-nav-pills-link-active-color: var(--bs-white); --bs-nav-pills-link-active-bg: var(--bs-warning);">
    <li class="nav-item" >
        <a class="nav-link  rounded-5" href="{{ route('indexHome') }}">
            <img src="https://img.icons8.com/ios/15/null/home--v1.png" class="px-1"/>Accueil
        </a>
    </li>
    <li class="nav-item" >
        <a class="nav-link active rounded-5"  href="{{ route('articles.index') }}">
            <img src="https://img.icons8.com/ios/15/null/blogger.png" class="px-1"/>Blog
        </a>
    </li>
    <li class="nav-item" >
        <a class="nav-link rounded-5"  href="{{ route('hotels') }}">
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
<div class="m-0 p-0"  style="background: #00235B">

    <div class="  p-4 mt-4 m-0 " >

        <div class="d-flex justify-content-start align-items-center p-3  "><img src="images/{{ Auth::user()->image }}" class="rounded-circle" alt="" style="width: 25px ; hight: 25px">
            <h6 class="px-2  fst-italic text-white">{{ Auth::user()->name }}</h6>
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
    <div class="d-flex justify-content-center align-items-center ">
    <form class="w-50  "  method="POST" action="{{ route('articles.store') }}" enctype="multipart/form-data">
        @csrf

<h2 class="mb-3 text-danger" >Blog </h2>
<h5 class="mb-4 text-white ">Partagez votre expérience de voyage dans la ville ou le pays que vous avez visité avec nous !! </h5>
        <h6 class="mb-3 text-white ">Ajouter un poste</h6>

        <div class="input-group  mb-3">
            <input type="text" class="form-control   border-bottom border-0 border-danger border-3" placeholder="Ajouter un titre" name="title" >
        </div>

        <div class="input-group mb-3">
            <textarea class=" form-control  border-bottom border-0 border-danger border-3" name="description" aria-label="Withtextarea"></textarea>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><img src="https://img.icons8.com/ios-filled/20/E21818/google-images.png" /></span>
            <input type="file" value="{{ ('image') }}" name="image" class="form-control form-control  mx-1 border-bottom border-0 border-danger border-3" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <button type="submit" class="  mx-2 px-3 btn btn-danger" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
            Entrée
        </button>
    </form>
    <img src="img/coverblog.png"/>
</div>
    </div>
    @if (session()->has('alert'))
   <div class="alert alert-success" role="alert">
        {{ session('alert') }}
    </div>
@endif
    <div class="mt-5">

        <div class=" my-5   d-flex justify-content-center flex-wrap ">
            @foreach ($articles as $article)
            <div class="  shadow col-sm-5  my-2 mx-1 bg-white">
                <div class="d-flex justify-content-between align-items-center px-4 pt-4 mb-3 ">
                    <div><img src="images/{{ $article->user ->image }}" class="rounded-circle" alt="" style="width: 30px ; hight: 25px"><span class="px-2  fst-italic"><b>{{ $article->user->name }} </b></span></div>
                    <p class="d-flex justify-content-end align-items-center px-4" style="color:rgb(13, 111, 229);">
                        {{ $article->created_at->diffForHumans() }}
                    </p>
                </div>
                
 @if (Auth::user()->role == 2 || Auth::user()->id == $article->user->id)
                <form class="d-flex justify-content-end align-items-center px-4" action="{{ route('articles.destroy', $article->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class=" btn btn-white border-bottom border-0 border-primary border-3" type="submit">Supprimer</button>
                </form>
@endif

                <div class=" px-4 ">
                    <h6>{{ $article->title }}</h6>
                    <p style="font-size : 14px" >{{ $article->description }}</p>
                    <div class=" d-flex justify-content-center">
                        <img src="images/{{ ($article->image) }}" class="rounded " alt="" style="width: 250px ;hight: auto"><span></span>
                    </div>
                    <hr class="">

                    <form method="POST" action="{{ route('likes.store') }}">
                        @csrf
                        <input type="hidden" id="" name="article_id" value="{{ $article->id }} " required />

                        <button type="submit" class="btn btn-white"> <img src="https://img.icons8.com/ios-filled/40/228BE6/love-circled.png" type="submit" class="mx-2 " /></button>
                    </form>



                    <form method="POST" action="{{ route('comments.store') }}" enctype="multipart/form-data">

                        @csrf
                        <input type="text" name="description" class="form-control mx-1 w-100 my-1 border-bottom border-0 border-primary border-3 " placeholder="ajouter un Commentaire  " aria-label="Username">
                        <input type="hidden" id="" name="article_id" value="{{ $article->id }}" />
                        <div class=" d-flex justify-content-end "> <button type="submit" class=" my-1 mx-2 px-3 btn btn-primary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Entrée</button></div>
                       
                    </form>



                </div>
               

                <div style="height: 200px; overflow: auto;">
                    <p class="m-1 p-1">Les Commentaire ({{$article->comments->count()}})</p>
                    @foreach ($article->comments as $comment)
                    <div class="   px-2 m-2 p-2 border border-2 border-primary  rounded ">
                        <div class="col-12"> <img src="images/{{ $comment->user->image }}" class="rounded-circle px-1 " alt="" style="width: 30px ; hight: 30px"><span class="fst-italic"><b>{{ $comment->user->name }}</b></span><span>
                                <p style="font-size : 12px">{{ $comment->description }}</p>
                            </span></div>
                            @if (Auth::user()->role == 2 || Auth::user()->id == $comment->user->id)

                        <form class="d-flex justify-content-end align-items-center px-5 " action="{{ route('comments.destroy', $comment->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class=" btn btn-white border-bottom border-0 border-primary border-3" type="submit">Supprimer</button>
                        </form>
                        @endif
                    </div>

                    @endforeach
                </div>

            </div>

            @endforeach



            <div>
              
                  
               

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