<?php
include "inc/functions.php";
$categories = getAllcategories();



 
  




?>

<nav  id="header" class="navbar navbar-expand-lg bg-body-tertiary">

    <div class="container-fluid">
          <a class="navbar-brand" href="index.php"><img src ="img/logo.png" class="logo" alt="Logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul  id="navbar" class="navbar-nav me-auto mb-2 mb-lg-0">
              
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Categories
                </a>
                <ul class="dropdown-menu" >
                <?php
                    foreach($categories as $categorie){
                  print '<li><a class="dropdown-item" href="#">'.$categorie['nom'].'</a></li>';
                }
                ?>
                
                
    
                </ul>
              </li>
             
              <?php if (isset($_SESSION['nom'])){
                print'<li class="nav-item">
                <a class="nav-link active" aria-current="page" href="profile.php">profile</a>
              </li>';
              if( isset($_SESSION['panier']) && is_array($_SESSION['panier'][3]))
              {print'
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="panier.php"><i class="fa fa-shopping-cart" style="font-size:24px"> ('.count($_SESSION['panier'][3]).')</i></a>
              </li>';
              }else{
                print'
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="panier.php"><i class="fa fa-shopping-cart" style="font-size:24px"> (0)</i></a>
              </li>';
              }
              
            
            
            
            }else{
               print' <li class="nav-item">
               <a class="nav-link" aria-current="page" href="connexion.php">Sign In</a>
             </li>
             <li class="nav-item">
               <a class="nav-link " aria-current="page" href="registre.php">Sign Up</a>
             </li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>';
               }?>
              
              

              
            </ul>
            <form class="d-flex" role="search" action="index.php" method="POST">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
              <button  id="titre" class="btn  btn-lg btn-block" type="submit">Search</button>
            </form>
            <?php
                if (isset($_SESSION['nom'])){
          
                 print'
                 <a class="navbar-brand" href="deconnexion.php">Logout</a>';}
                
            ?>
          </div>
        </div>
       
      </nav>
         
      <div>
   
    