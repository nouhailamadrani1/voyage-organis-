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
                    <th scope="col">Titre</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                   
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    @foreach ($articles as $article)
                    <th scope="row">{{$article->id}}</th>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->description }} </td>
                    <td><img  src="images/{{ ($article->image) }}" class="" alt="" style="width: 50px ; hight: 50px"></td>
                  <td></td>
                      <td class="d-flex">
                        <form class="" action="{{ route('blogDashboard.destroy', $article->id)}}" method="post">
                         @csrf
                         @method('DELETE')
                         <button class=" btn btn" type="submit"> <img src="https://img.icons8.com/ios-glyphs/20/f11010/delete-forever.png"/></button>
                     </form>
                     <form class="" action="{{ route('blogDashboard.destroy', $article->id)}}" method="post">
                       @csrf
                       @method('DELETE')
                       <button class=" btn btn" type="submit"> <img src="https://img.icons8.com/ios-glyphs/20/41ef1f/vision.png"/></button>
                   </form>
                  
                   <form class="" action="{{ route('blogDashboard.destroy', $article->id)}}" method="post">
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
        <form  method="POST" action="{{ route('blogDashboard.store') }}" enctype="multipart/form-data">
          @csrf
        <div  class="  p-1 bg-danger m-3 bg-opacity-10 p-2  border border-danger border-2 rounded-4 shadow" >
            <h6 class="d-flex justify-content-center m-2 mb-3 fw-semibold text-danger ">Ajouter un blog</h6>
            <div class="hr border border-danger border-1 	"></div>
        
            
            <div class="mb-3 mx-1">
                <label for="exampleFormControlInput1" class="form-label fw-semibold">Titre</label>
                <input type="text" class="form-control border border-danger border-2 rounded-4 shadow" name="title">
            </div>

              <div class="mb-3 m-2">
                <label for="exampleFormControlTextarea1" class="form-label fw-semibold">Description</label>
                <textarea class="form-control border border-danger border-2 rounded-4 shadow" name="description" rows="3"></textarea>
              </div>
              <div class="mb-3 m-2">
                <label for="exampleFormControlInput1" class="form-label fw-semibold">Image</label>
                <input type="file" class="form-control border border-danger border-2 rounded-4 shadow" name="image">
              </div>
              <div class="mb-3  d-flex justify-content-center">
              <button type="submit" class="btn btn-danger px-3  border-2 rounded-4 shadow fw-semibold  ">Ajouter</button>
            </div>
        </div>
        </form>
       </div>





</div>
@endsection
