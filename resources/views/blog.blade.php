@extends('layouts.app')

@section('content')

<div class="m-0 p-0">




    <img src="img/hele1.jpg" class="img-fluid" alt="...">

    <div class="col-sm-12  d-flex justify-content-center flex-warp px-3" style="margin-block-start: -16%">
        <div>
            <div class="w-100 p-3">
                <h5 class="text-warning">Bienvenue sur notre page de blog de voyage ! </h5>

            </div>
            <div class=" shadow w-100 card  p-2 d-flex justify-content-center" style="background:rgb(255, 213, 10)">
                <form class="d-flex align-items-center" role="search">

                    <label class="w-25 mx-2">Chercher </label>
                    <input class="form-control mx-2" type="search" placeholder="Nom de ville" aria-label="Search">
                    <button class="btn btn-white mx-2  fs-5 " type="submit"><img src="https://img.icons8.com/ios-filled/25/228BE6/search--v1.png"/></button>
                </form>
            </div>
            <p class="text-warning"><b>Nous sommes heureux de partager avec vous notre passion pour les voyages et
                    les aventures à travers le monde.</b>
            </p>
        </div>
    </div>
    <div class="my-5">

        <div class=" my-5   d-flex justify-content-center flex-wrap ">
            @foreach ($articles as $article)
            <div class="  shadow col-sm-5  my-2 mx-1">
                <div class="d-flex justify-content-between align-items-center px-4 pt-4 mb-3 ">
                    <div><img src="images/{{ $article->user ->image }}" class="rounded-circle" alt="" style="width: 30px ; hight: 25px"><span class="px-2  fst-italic"><b>{{ $article->user->name }} </b></span></div>
                    <p class="d-flex justify-content-end align-items-center px-4" style="color:rgb(13, 111, 229);">
                        {{ $article->created_at }}
                    </p>
                </div>
                <form class="d-flex justify-content-end align-items-center px-4" action="{{ route('articles.destroy', $article->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class=" btn btn-white border-bottom border-0 border-primary border-3" type="submit">Supprimer</button>
                </form>


                <div class=" px-4 ">
                    <h5>{{ $article->title }}</h5>
                    <p>{{ $article->description }}</p>
                    <div class=" d-flex justify-content-center">
                        <img src="images/{{ ($article->image) }}" class="rounded " alt="" style="width: 250px ;hight: auto">
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

                <div>
                    <h6 class="m-1 p-1">Les Commentaire</h6>
                    @foreach ($article->comments as $comment)
                    <div class="   px-2 m-2 p-2 border border-2 border-primary  rounded ">
                        <div class="col-12"> <img src="img/profile.jpeg" class="rounded" alt="" style="width: 25px ; hight: 25px"><span class="fst-italic"><b>{{ $comment->user->name }}</b></span><span>
                                <p>{{ $comment->description }}</p>
                            </span></div>


                        <form class="d-flex justify-content-end align-items-center px-4" action="{{ route('comments.destroy', $comment->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class=" btn btn-white border-bottom border-0 border-primary border-3" type="submit">Supprimer</button>
                        </form>
                    </div>

                    @endforeach
                </div>

            </div>

            @endforeach



            <div>
                <div class="W-100 p-4 my-4" style="background:rgb(255, 213, 10)">

                    <div class="d-flex justify-content-start align-items-center p-3  "><img src="images/{{ Auth::user()->image }}" class="rounded-circle" alt="" style="width: 25px ; hight: 25px">
                        <h6 class="px-2  fst-italic">{{ Auth::user()->name }}</h6>
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
                    <form class="W-100 p-4 my-4" style="background:rgb(255, 213, 10)" method="POST" action="{{ route('articles.store') }}" enctype="multipart/form-data">
                        @csrf


                        <h6 class="mb-2">Ajouter un poste</h6>

                        <div class="input-group  mb-3">
                            <input type="text" class="form-control   border-bottom border-0 border-primary border-3" placeholder="Ajouter un titre" name="title" >
                        </div>

                        <div class="input-group mb-3">
                            <textarea class=" form-control  border-bottom border-0 border-primary border-3" name="description" aria-label="Withtextarea"></textarea>
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><img src="https://img.icons8.com/ios-filled/20/228BE6/google-images.png" /></span>
                            <input type="file" value="{{ ('image') }}" name="image" class="form-control form-control  mx-1 border-bottom border-0 border-primary border-3" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <button type="submit" class="  mx-2 px-3 btn btn-primary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                            Entrée
                        </button>
                    </form>

                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
    @endsection