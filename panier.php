
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
    <link rel="stylesheet" href="css/projet.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
  <?php
include "inc/header.php";
$total=0;
if(isset($_SESSION['panier']))
{$total=$_SESSION['panier'][1];}

if (!empty($_POST)){
  //echo "button search clicked";
  //echo $_POST['search'];
   $produits = searchProduits($_POST['search']);
  } else{
   $produits= getAllproducts();
  }
  $commandes=array();
if(isset($_SESSION['panier']))
{
    if(count($_SESSION['panier'][3])>0)
    {
        $commandes=$_SESSION['panier'][3];
    }
}
 

?>
 <section id ="product1" class="section-p1">
    <i style="color:#088178;font-size:100px" class="fa cart">&#xf07a;</i>
     <div class="pro-container ">
     <table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
    <th>#</th>
      <th>Product</th>
      <th>Quantity</th>
      <th>Total</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $i=0;
    foreach($commandes as $index =>$commande)
    {
   
    print'<tr>
    <th scope="row">'.($i++).'</th>
      <td>
        
         
        
            <p class="fw-bold mb-1">'.$commande[4].'</p>
          
       
       
      </td>
      <td>
        <p class="fw-normal mb-1">'.$commande[0].'
        pieces</p>
       
      </td>
      <td>
      <p class="fw-normal mb-1">'.$commande[1].'$</p>
     
    </td>
      <td>
      
        <a href="actions/supprimer_panier.php?id='.($i-1).'" >    <button type="button" class="btn btn-link btn-sm btn-rounded">
        Delete
      </button></a>
      </td>
    </tr>';}
    ?>
    
    
  </tbody>
</table>
   <div  class="text-end mt-3"  style="width:1400px" >
    <h4> Total : <?php echo $total?>$</h4>
 
    <a id="btn" href="actions/valider_panier.php" type="button" style="color: #088178;width:100px"class="btn ">Confirm</a>
   </div>
</div>
     
    
    
     
     
     








  </section>
    <?php
    include "inc/footer.php";
    ?>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
</html>