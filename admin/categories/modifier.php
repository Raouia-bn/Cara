<?php
session_start();
//1-recuperation des donnes de la formulaire
$nom= $_POST['nom'];
$id= $_POST['idc'];
$description= $_POST['description'];

$date_modification = date("Y-m_d");

//2_la chaine de connexion
include "../../inc/functions.php";
$conn = connect();
//3-creation de la requette
$requette= "UPDATE categorie SET nom='$nom',description='$description',date_modification='$date_modification' WHERE id='$id'";

//4-execution de la requette
$resultat = $conn->query($requette);
if($resultat){
    header('location:liste.php?modif=ok');
}



?>