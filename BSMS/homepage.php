<?php
include 'connection.php';
  
require 'session.php';
confirm_logged_in();
  ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BUS SCHEDULING SYSTEM IN IIITDMJ</title>
    <link rel="icon" href="image\favicon.jpg" sizes="16*16 32*32">
    
    
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="mainpage.php">BUS SCHEDULING IN IIITDMJ</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="mainpage.php">
        <i class="fas fa-bars"></i>
      </button>

      

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="register.php">Register</a>
            <a class="dropdown-item" href="logout.php">Sign in</a>
            <a class="dropdown-item" href="logout.php"  data-target="#logoutModal">Logout</a>
            
          </div>
        </li>
        <li>
        <a href="mainpage.php" class="navbar-brand mr-1">HOME</a>
        </li>
      </ul>
     

    </nav>


    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav bg-dark">
        <li class="nav-item">
          <a class="nav-link" href="homepage.php">
            <i class="fas fa-fw fa-home"></i>
            <span>HOMEPAGE</span>
          </a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="userbus.php">
            <i class="fas fa-fw fa-bus"></i>
            <span>Bus</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="userdriver.php">
            <i class="fas fa-fw fa-users    "></i>
            <span>Driver</span></a>
        </li>
        
        </li>
        <li class="nav-item">
          <a class="nav-link" href="userroute.php">
            <i class="fas fa-fw fa-route   "></i>
            <span>Route</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="userschedule.php">
            <i class="fas fa-fw fa-clock  "></i>
            <span>Schedule</span></a>
          </li>
            <li class="nav-item">
          <a class="nav-link" href="userstop.php">
            <i class="fas fa fa-map-marker"></i>
            <span>Stop</span></a>
          </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">


          <!-- Breadcrumbs-->
          <ol class="breadcrumb"
            <li class="breadcrumb-item" style="background-image: linear-gradient();">
               <h2> BUS SCHEDULE IN IIITDMJ</h2> 
            </li>
            <li>
            <a href="sound.php">🎤</a>
            </li>
            
           
          </ol>

         <body>
           
         <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="1000">
      <img src="image\1.jpeg" class="d-block w-100 " style="width: 350px; height: 500px;" alt="cool">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="image\2.jpeg" class="d-block w-100" style="width: 350px; height: 500px;"  alt="...">
      
</div>
<div class="carousel-item" data-bs-interval="3000">
      <img src="image\3.jpeg" class="d-block w-100" style="width: 350px; height: 500px;"  alt="...">

</div>
   
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  
</div>
         </body>
<?php include 'footer.php'; ?>