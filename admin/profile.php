<?php

session_start();





?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Cara-Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
<link rel="stylesheet" href="../../css/cara.css" />
    <!-- Bootstrap core CSS -->
<link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header  style="background-color: white"  class="navbar navbar-brand sticky-top bg-brand flex-md-nowrap p-0 shadow">
  <a  style="background-color: white" class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><img src ="../img/logo.png" class="logo" alt="Logo"></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-brand w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav" style="color: white">
    <div class="nav-item text-nowrap" style="background-color: white">
      <a  style="background-color: white" class="nav-link px-3" href="..\deconnexion.php"> <i  style="color: #088178 " class="fa fa-power-off"></i></a>
     
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    
  <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="#">
              <span data-feather="home"></span>
             Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="categories/liste.php">
              <span data-feather="list"></span>
              Categories
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="produits/liste.php">
              <span data-feather="shopping-cart"></span>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="clients/liste.php">
              <span data-feather="users"></span>
              Customers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="stock/liste.php">
              <span data-feather="layers"></span>
              Stock
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="commandes/liste.php">
              <span data-feather="shopping-cart"></span>
              Shopping cart 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="profile.php">
              <span data-feather="user"></span>
             Profil
            </a>
          </li>
        </ul>

        
      </div>
    </nav>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Profil</h1>
        
      
      </div>

      <section class="vh-30" style="background-color: #088178;">
  <div class="container py-4 h-50">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text-black"
              style="border-top-left-radius: .5srem; border-bottom-left-radius: .5rem;">
              <img src="..\img\admin\admin.png" alt="Avatar" class="img-fluid my-5" style="width: 150px;" />
              <h5>Admin</h5>
        
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Information</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Email</h6>
                    <p class="text-muted"><?php echo $_SESSION['email']?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Name</h6>
                    <p class="text-muted"><?php echo $_SESSION['nom']?></p>
                  </div>
                </div>
                <h6>Projects</h6>
              
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                   
                    <p class="text-muted">Cara e_commerce</p>
                  </div>
                 
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

      
    </main>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


    <script src="..\js\bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    
      <script src="..\js\dashboard.js"></script>
     

  </body>
 
</html>
