<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/cara.css" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<?php
include "inc/header.php";
if(isset($_POST['btnUpdateProfil']))
{if (editAdmin($_POST))
{

    $_SESSION['id']= $user['id'];
    $_SESSION['email']= $user['email'];
    $_SESSION['nom']= $user['nom'];
    $_SESSION['prenom']= $user['prenom'];
    $_SESSION['mdp']= $user['mdp'];
    $_SESSION['tel']= $user['tel'];
    $_SESSION['etat']= $user['etat'];
}}
?>

<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item active"  style="text-decoration:center;"aria-current="page">User Profile</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
         
            <h5 class="my-3"><?php echo $_SESSION['nom']." " .$_SESSION['prenom']?></h5>
            <p class="text-muted mb-1"><?php echo $_SESSION['email']?></p>
           
            <div class="d-flex justify-content-center mb-2">
             
            <a href="" data-bs-toggle="modal" data-bs-target="#updateModal">  <button type="button" id="btn" class="btn btn-outline ms-1">Update</button></a>
            </div>
          </div>
        </div>
       
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $_SESSION['nom']." " .$_SESSION['prenom']?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $_SESSION['email']?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $_SESSION['tel']?></p>
              </div>
            </div>
           
            <hr>
          
          </div>
        </div>
      
      </div>
    </div>
  </div>
</section>

<!-- Modal Update-->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Profil</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
          <input type="hidden" value="<?php echo $_SESSION['id'];?>" name="id"/>
        <div class="form-group">
            <input type="text" name="nom" value="<?php echo $_SESSION['nom'];?>" class="form-control" placeholder="User Name ..."/>
          </div>
          <br>
          <div class="form-group">
            <input type="text" name="prenom" value="<?php echo $_SESSION['prenom'];?>" class="form-control" placeholder="User FileName ..."/>
          </div>
          <br>
          <div class="form-group">
            <input type="email" name="email" value="<?php echo $_SESSION['email'];?>" class="form-control" placeholder="User Email ..."/>
          </div>
          <br>
          <div class="form-group">
            <input type="tel" name="tel" value="<?php echo $_SESSION['tel'];?>" class="form-control" placeholder="User Tel ..."/>
          </div>
          <br>
          <div class="form-group">
            <input type="password" name="pwd" class="form-control" placeholder="User Password ..."/>
          </div>
          <br>



    
      </div>
      <div class="modal-footer">
       
        <button type="submit" name="btnUpdateProfil" id="btn" class="btn btn-primary">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>


<?php
    include "inc/footer.php";
    ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>