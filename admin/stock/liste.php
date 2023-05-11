<?php

session_start();
include "../../inc/functions.php";

$stocks=getAllStocks();

   
  


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
    <link rel="stylesheet" href="../../css/cara.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    

    <!-- Bootstrap core CSS -->
<link href="../../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
    <link href="../../css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header  style="background-color: white"  class="navbar navbar-brand sticky-top bg-brand flex-md-nowrap p-0 shadow">
  <a  style="background-color: white" class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><img src ="../../img/logo.png" class="logo" alt="Logo"></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-brand w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav" style="color: white">
    <div class="nav-item text-nowrap" style="background-color: white">
      <a  style="background-color: white" class="nav-link px-3" href="..\..\deconnexion.php"> <i  style="color: #088178 " class="fa fa-power-off"></i></a>
    
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
            <a class="nav-link" href="../categories/liste.php">
              <span data-feather="list"></span>
              Categories
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="liste.php">
              <span data-feather="shopping-cart"></span>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../clients/liste.php">
              <span data-feather="users"></span>
              Customers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="liste.php">
              <span data-feather="layers"></span>
              Stock
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../commandes/liste.php">
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
            <a class="nav-link active" href="../profile.php">
              <span data-feather="user"></span>
             Profil
            </a>
          </li>
        </ul>

        
      </div>
    </nav>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">
        Stock of products</h1>

      </div>
     
      
      <?php if (isset($_GET['update']) && $_GET['update']=="ok")
      {print'<div  role="alert" class="alert alert-success">
        Quantity update
        </div>';}
        ?>
<!--list des produits-->
<table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
    <th>#</th>
      <th>Name of product</th>
      <th>Quantity</th>
      
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $i=0;
    foreach($stocks as $index =>$stock)
    {
    $i++;
    print'<tr>
    <th scope="row">'.$i.'</th>
      <td>
        <div class="d-flex align-items-center">
          <img
              src="../../img/'.$stock['image'].'"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"
              />
          <div class="ms-3">
            <p class="fw-bold mb-1">'.$stock['nom'].'</p>
            
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">'.$stock['quantite'].'</p>
       
      </td>
      
      
      <td>
      <a data-bs-toggle="modal" data-bs-target="#updateModal'.$stock['id'].'">    <button type="button" class="btn btn-link btn-sm btn-rounded">
          Edit
        </button></a>
       
      </td>
    </tr>';}
    ?>
    
    
  </tbody>
</table>



    </main>
  </div>
</div>



<?php
foreach ($stocks as $index => $stock)
{?>

<div class="modal fade" id="updateModal<?php echo $stock['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Quantity <span style="color: #088178 "> <?php echo $stock['nom'];?><span></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="modifier.php" method="post">
        <label for="inputState">Quantity</label>
          <input type="hidden" value="<?php echo $stock['id'];?>" name="ids"/>
        <div class="form-group">
            <input type="number" price =1 name="qtn" value="<?php echo $stock['quantite'];?>" class="form-control" placeholder="Stock quantity ..."/>
          </div>
          <br>

      </div>
      <div class="modal-footer">
       
        <button type="submit"  id="btn" class="btn btn-primary">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php
}
?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


    <script src="..\..\js\bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    
      <script src="..\..\js\dashboard.js"></script>
      <script src="../../script.js"></script>

  </body>
 
</html>
