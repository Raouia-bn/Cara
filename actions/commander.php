<?php 


 session_start();
if(!isset($_SESSION['nom']))
 {header('location:../connexion.php');
 exit();}
 include "../inc/functions.php";
 $conn = connect();

 $client=$_SESSION['id'];

 $id_produit= $_POST['idp'];
 $quantite= $_POST['qtn'];

 $requette="SELECT nom,prix FROM produit  WHERE id='$id_produit'";
// //4-execution de la requette
 $resultat = $conn->query($requette);
 $produit=$resultat->fetch();
// var_dump($produit['prix']);
 $total=$quantite*$produit['prix'];
 $nom=$produit['nom'];
// //echo $total;
$date = date("Y-m_d");
if(!$_SESSION['panier']){//creation panier mara barka=mech mawjoud
$_SESSION['panier']=array($client,0,$date,array());
}
$_SESSION['panier'][1]+=$total;
$_SESSION['panier'][3][]=array($quantite,$total,$date,$date,$id_produit,$nom);
//echo "panier   <br/>";
var_dump($_SESSION['panier']);
//echo "cmd panier   <br/>";
//var_dump($_SESSION['panier'][3]);
header('location:../panier.php');
exit;


  
  
?>