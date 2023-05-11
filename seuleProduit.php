
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cara</title>
    <link rel="stylesheet" href="css/cara.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.min.css" >
  </head>
<body>
<?php
session_start();
include "inc/header.php";

$categories = getAllcategories();
if (isset($_GET['id'])){
  $produit = getProduitById($_GET['id']);
}
?>

 
  <section id="prodetails" class="section-p1 offset-2">
 
  
  <div class="single-pro-image">
  <?php if(  isset (  $_SESSION['etat']) && $_SESSION['etat']==0)
   {
    print'<div class="alert alert-danger">Invalid account</div>';
   }?> <img  src="img/<?php echo $produit['image'] ?> "width="100%" id="MainImg">
       
    </div>
    <div class="single-pro-details">
      <?php foreach($categories as $index =>$categorie)
      {
        if ($categorie['id']== $produit['categorie'])
      {
        print'<h6>Category : '.$categorie['nom'] .'</h6>';
        }
        }?>
      
      <h4> <?php echo $produit['nom'] ?> </h4>
      <h2><?php echo $produit['prix'] ?>$  </h2>
      <form action="actions/commander.php" method="post">
      <input type="hidden" value="<?php echo $produit['id'];?>" name="idp"/>
      <input type="number" name="qtn" price=1 value="1">

      <button type="submit" <?php if(  isset (  $_SESSION['etat']) &&  $_SESSION['etat']== 0){echo "disabled";} ?> class="normal" >Add To Cart</button>
      <form>
      <h4>Product Details</h4>
      <span><?php echo $produit['description'] ?></span> 
    </div>
  </section>


  <?php
    include "inc/footer.php";
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
   <script  src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.all.min.js"></script>
</html>