<?php 
$idProduit =$_GET['idp'];
include "../../inc/functions.php";
$conn = connect();
$requette="DELETE FROM produit WHERE id='$idProduit'";

//4-execution de la requette
$resultat = $conn->query($requette);
if($resultat){
    header('location:liste.php?delete=ok');
}

?>