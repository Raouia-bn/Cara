<?php
session_start();
$idclient=$_GET['id'];
//2_la chaine de connexion
include "../../inc/functions.php";
$conn = connect();
$requette="UPDATE client SET etat=1 WHERE id='$idclient'";
//4-execution de la requette
$resultat = $conn->query($requette);
if($resultat){
    header('location:liste.php?valider=ok');}
else {echo "erreur validation";}
?>