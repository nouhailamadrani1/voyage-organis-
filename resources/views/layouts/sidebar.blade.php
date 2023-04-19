<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
       <link href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css">
       <style>/* The side navigation menu */
        .sidebar {
          margin: 0;
          padding: 0;
          width: 240px;
          background-color: #0c0808;
          position: fixed;
          height: 100%;
          overflow: auto;
          text:white;
        }
        
        /* Sidebar links */
        .sidebar a {
          display: block;
          color: rgb(249, 247, 247);
          padding: 16px;
          text-decoration: none;
        }
        
        /* Active/current link */
        .sidebar a.active {
          background-color: #04AA6D;
          color: white;
        }
        
        /* Links on mouse-over */
        .sidebar a:hover:not(.active) {
          background-color: #c31515;
          color: white;
          width: 100%;
        }
        
        /* Page content. The value of the margin-left property should match the value of the sidebar's width property */
        div.content {
          margin-left: 200px;
          padding: 1px 16px;
          height: 1000px;
        }
        
        /* On screens that are less than 700px wide, make the sidebar into a topbar */
        @media screen and (max-width: 700px) {
          .sidebar {
            width: 100%;
            height: auto;
            position: relative;
          }
          .sidebar a {float: left;}
          div.content {margin-left: 0;}
        }
        
        /* On screens that are less than 400px, display the bar vertically, instead of horizontally */
        @media screen and (max-width: 400px) {
          .sidebar a {
            text-align: center;
            float: none;
          }
        }</style>
      
    </head>


<body class="m-0" style="">
  
      
      <nav class=" navbar navbar-expand-lg bg-white fixed-top ">
        <div class="container-fluid ">
          <a class="navbar-brand fst-italic" href="#"><img src="logo.png" alt="" style="width: 50px ; hight: 50px ; "><b></b></b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              
             
              <li class="nav-item">
                <a class=" btn btn-dark text-white rounded-pill shadow mx-2" href="#"> Accueil</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark mx-2 " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <b>  Créer</b>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Tronsport</a></li>
                  <li><a class="dropdown-item" href="#">Hotel</a></li>
                  <li><a class="dropdown-item" href="#">voyage Organisé</a></li>
                  
                </ul>
              </li>
              
              
      
          
            </ul>
            
          
          </div>
          
          <div>
      
            <img src="https://img.icons8.com/ios/50/null/search--v1.png" class="rounded  p-2 mx-2 " style="width: 40px ; hight: 40px ; " />
       
  
        <img src="https://img.icons8.com/ios/50/null/appointment-reminders--v1.png" class="rounded bg-body-tertiary p-2 mx-2 " style="width: 40px ; hight: 40px"/>
  
   <img src="images/{{Auth::user()->image}} " class="rounded mx-2 " alt="" style="width: 40px ; hight: 40px"/>
 
  </div>
      </div>
     
     
     


      </nav>
   
      <!-- The sidebar -->
<div class="sidebar   bg-black">
  <ul class="list-group list-group-flush mt-4 px-3">
    <li class="mt-5 d-flex justify-content-center  ">   <img src="images/{{Auth::user()->image}} " class="rounded mx-2 " alt="" style="width: 80px ; hight: 80px"/>
      <a href="#" class=" text-white ">Profile</a>
     </li>

    
    <li class="  bg-black d-flex align-items-center mt-4" class="active"><img src="https://img.icons8.com/ios-filled/20/228BE6/residence.png"/><a href="/noha" class="  bg-black text-decoration-none  fs-6">Accueil</a></li>

    <li class="  bg-black d-flex align-items-center"><img src="https://img.icons8.com/ios-filled/20/228BE6/residence.png"/><a href="{{route('hotel.index')}}" class="  text-decoration-none  fs-6">Hotel</a></li>
  
  
    <li class="bg-black d-flex align-items-center"><img src="https://img.icons8.com/ios-filled/20/228BE6/car.png"/><a  href="{{route('transports.index')}}" class=" text-decoration-none fs-6">Tronsport</a></li>
    <li class="  bg-black  d-flex align-items-center"><img src="https://img.icons8.com/ios-filled/20/228BE6/medium-logo.png"/><a href="{{route('blogDashboard.index')}}"  class="  text-decoration-none fs-6">Blog</a></li>
    <li class="  bg-black d-flex align-items-center"><img src="https://img.icons8.com/ios-filled/20/228BE6/sunbathe.png"/><a href="{{route('voyageDashboard.index')}}" class=" text-decoration-none  fs-6">Voyage Organisé</a></li>
    <li class="  bg-black d-flex align-items-center"><img src="https://img.icons8.com/ios-filled/20/228BE6/sunbathe.png"/><a href="{{route('reservation.index')}}" class=" text-decoration-none  fs-6">Reservation</a></li>
    
  
  
  </ul>
</div>
<div class="content px-2">
  @yield('content')
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body></html>