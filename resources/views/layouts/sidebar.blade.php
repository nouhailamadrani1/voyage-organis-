<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
       <link href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css">
    </head>


<body class="m-0" style="">
  
      
      <nav class=" navbar navbar-expand-lg bg-white ">
        <div class="container-fluid ">
          <a class="navbar-brand" href="#"><img src="logo.png" alt="" style="width: 50px ; hight: 50px"></a>
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
      </div>
     
        <form class="d-flex align-items-center " role="search">

       
          <input class="px-5 py-2    border border-dark border-2 rounded-pill mx-2  " type="search" placeholder="Chercher" aria-label="Search">
          <button class="btn btn-white    " type="submit"><img src="https://img.icons8.com/ios-filled/25/0000/search--v1.png"/></button>
      </form>
      


      </nav>
   


    <div class="d-flex justify-content-between">
        
        <h2 style="color: rgb(27, 33, 54);"> 
          <img src="https://img.icons8.com/ios-filled/32/0000/squared-menu.png" class="p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop"/>
     
        
        <div class="offcanvas offcanvas-start col-3 " data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="staticBackdropLabel"  style="color:rgb(13, 111, 229);">Menu</h5>
            <img src="https://img.icons8.com/ios-filled/30/228BE6/delete-sign--v1.png"  type="button" class="" data-bs-dismiss="offcanvas" aria-label="Close"/>
          </div>
          <div class="offcanvas-body">
            <ul class="list-group list-group-flush">
              <li class=" m-2 list-group-item"><img src="https://img.icons8.com/ios-filled/20/228BE6/residence.png"/><a href="{{route('hotel.index')}}" class=" mx-2 text-decoration-none text-black fs-6">Hotel</a></li>
              <li class=" m-2 list-group-item "><img src="https://img.icons8.com/ios-filled/20/228BE6/car.png"/><a  href="{{route('transports.index')}}" class=" mx-2 text-decoration-none text-black fs-6">Tronsport</a></li>
              <li class=" m-2 list-group-item"><img src="https://img.icons8.com/ios-filled/20/228BE6/medium-logo.png"/><a href="{{route('blogDashboard.index')}}"  class=" mx-2 text-decoration-none text-black fs-6">Blog</a></li>
              <li class=" m-2 list-group-item"><img src="https://img.icons8.com/ios-filled/20/228BE6/sunbathe.png"/><a href="statisic.php" class=" mx-2 text-decoration-none text-black fs-6">Voyage Organisé</a></li>
              <li class=" m-2 list-group-item"><img src="https://img.icons8.com/dotty/20/228BE6/client-management.png"/><a href="statisic.php" class=" mx-2 text-decoration-none text-black fs-6">Clients</a></li>
              <li class=" m-2 list-group-item"><img src="https://img.icons8.com/ios-filled/20/228BE6/user.png"/><a href="statisic.php" class=" mx-2 text-decoration-none text-black fs-6">Profile</a></li>


          </ul>
          </div>
        </div>
      

    </div>
    <main class="">
        @yield('content')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</body></html>