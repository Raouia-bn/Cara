
<?php

session_start();
if(isset($_SESSION['nom']))
{header('location:profile.php');}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cara</title>
    <link rel="stylesheet" href="cara.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.min.css" >
  </head>
<body>
<?php
include "inc/header.php";
$i=0;
$user = true;
if (!empty($_POST)){ //click sur le button sauvegarder
  $user= ConnectClient($_POST);
  $i++;
  if(count($user) > 0)
  {session_start();
    $_SESSION['id']= $user['id'];
   $_SESSION['email']= $user['email'];
   $_SESSION['nom']= $user['nom'];
   $_SESSION['prenom']= $user['prenom'];
   $_SESSION['mdp']= $user['mdp'];
   $_SESSION['tel']= $user['tel'];
  header ('location:profile.php');}

}
?>
      <!-- fin nav -->
      <div class="col-12 p-5">
    
        <form action="connexion.php" method="post">
        <section class="vh-100 col-8 offset-2" >
  <div class="container py-5 h-20">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
   
            <h1 class="mb-5 titre">Sign In</h1>
           
            </div>
            <div class="form-outline mb-4">
            <label  class="form-label" for="typeTelX-2">Email</label>
              <input type="email"  name ="email" id="typeTelX-2" class="form-control form-control-lg" />
        
            </div>
            <div class="form-outline mb-4">
            <label class="form-label" for="typePasswordX-2">Password</label>
              <input type="password" name="mdp" id="typePasswordX-2" class="form-control form-control-lg" />
             
            </div>

       
            <div class="text-center">
            <button id="btn" class="btn btn-primary btn-lg btn-block " type="submit">Sign In</button>
</div>

          

      
       
      </div>
    </div>
  </div>
</section>
          </form>

      </div>

   <!-- footer -->
   <?php
    include "inc/footer.php";
    ?>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
   
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.all.min.js"></script>
   <?php
   if ( count($user) == 0 &&  $i !=0 )
   {
   print "<script> 
   Swal.fire({
     position: 'center',
     icon: 'error',
     title: 'Cordonnes non valide',
     showConfirmButton: false,
     timer: 2000
   })</script>"
   ;
  }
   ?>


</html>