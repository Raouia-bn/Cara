<?php
session_start();
//1-recuperation des donnes de la formulaire
$nom= $_POST['nom'];
$id= $_POST['idp'];
$description= $_POST['dcp'];

$date_modification = date("Y-m_d");
$prix= $_POST['prix'];

//2_la chaine de connexion
include "../../inc/functions.php";
$conn = connect();
//3-creation de la requette
$requette= "UPDATE produit SET nom='$nom',description='$description',prix='$prix',date_modification='$date_modification' WHERE id='$id'";

//4-execution de la requette
$resultat = $conn->query($requette);
if($resultat){
    header('location:liste.php?modif=ok');
}



?>