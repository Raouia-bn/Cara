<?php
 include "../inc/functions.php";
 $conn = connect();

 session_start();
$client=$_SESSION['id'];
$total=$_SESSION['panier'][1];
$date= date("Y-m_d");









// //panier
 $requette_panier="INSERT INTO panier(client,total,date_creation)VALUES('$client','$total','$date')";
 $resultatp = $conn->query($requette_panier);
 $panier_id=$conn->lastInsertId();
$commandes=$_SESSION['panier'][3];
foreach($commandes as $commande)
{// //cmd
  $quantite=$commande[0];
  $total=$commande[1];
  $id_produit=$commande[4];

//     //3-creation de la requette
$requette1= "INSERT INTO commande(quantite,total,panier,date_creation,date_modification,produit)VALUES('$quantite','$total','$panier_id','$date','$date','$id_produit');";
  
//   //4-execution de la requette
 $resultat1 = $conn->query($requette1);
}
  $_SESSION['panier']=null;
  header('location:../index.php');
?>