
<?php

session_start();



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cara</title>
    <link rel="stylesheet" href="css//projet.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
  <?php
include "inc/header.php";
if (!empty($_POST)){
  //echo "button search clicked";
  //echo $_POST['search'];
   $produits = searchProduits($_POST['search']);
  } else{
   $produits= getAllproducts();
  }

 

?>
 <section id ="product1" class="section-p1">
     <h2>Featured Products</h2>
     <p> Summer Collection New Morden Dessign </p>
     <div class="pro-container">
     <?php
      foreach($produits as $produit){
        print ' 
      <div class="pro">
        <img src="img/'.$produit['image'].'">
        <div class="des">
          <span>'.$produit['nom'].'</span>
          <h5>'.$produit['description'].'</h5>
          <div class="star">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
           </div>
          <h4>'.$produit['prix'].'</h4>
        </div>
        <a  href="seuleProduit.php?id='.$produit['id'].'"><i style="font-size:24px" class="fa cart">&#xf138;</i></a>
      </div>';
    }
    ?>
</div>
     
    
    
     
     
     








  </section>
    <?php
    include "inc/footer.php";
    ?>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
</html>