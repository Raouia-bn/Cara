<?php
session_start();
//1-recuperation des donnes de la formulaire
$nom= $_POST['nom'];
$description= $_POST['description'];
$createur = 1;
$prix = $_POST['prix'];
$categorie= $_POST['categorie'];
$date_creation = date("Y-m_d");
$quantite= $_POST['qtn'];
//upload image 
$target_dir = "../../img/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
 $image=$_FILES["image"]["name"];
} else {
  echo "Sorry, there was an error uploading your file.";
}

//2_la chaine de connexion
include "../../inc/functions.php";
$conn = connect();


try {
  //3-creation de la requette
$requette= "INSERT INTO produit(nom,description,createur,date_creation,prix,image,categorie)VALUES('$nom', '$description', '$createur', '$date_creation','$prix','$image','$categorie')";

//4-execution de la requette
$resultat = $conn->query($requette);


if($resultat){
  $produit_id=$conn->lastInsertId();
  $requette2= "INSERT INTO stock(produit,quantite,createur,date_creation)VALUES('$produit_id', '$quantite', '$createur', '$date_creation')";
   if($conn->query($requette2))
   {  header('location:liste.php?ajout=ok');}
else{echo "impossible d ajouter le stock produits";
}
}
  } catch(PDOException $e) {
    echo "eeeeeeeeee".$e->getMessage();
    
  }
  return $conn;



?>