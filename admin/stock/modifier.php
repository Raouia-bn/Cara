<?php
session_start();
//1-recuperation des donnes de la formulaire
$qtn= $_POST['qtn'];
$id= $_POST['ids'];




//2_la chaine de connexion
include "../../inc/functions.php";
$conn = connect();
//3-creation de la requette
$requette= "UPDATE stock SET quantite='$qtn' WHERE id='$id'";

//4-execution de la requette
$resultat = $conn->query($requette);
if($resultat){
    header('location:liste.php?update=ok');
}



?>