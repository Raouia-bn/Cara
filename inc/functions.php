<?php

function connect(){
  //1-connexion vers la BD
$servername="localhost";
$DBuser = "root";
$DBpassword = "";
$DBname = "cara";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$DBname", $DBuser, $DBpassword);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
  return $conn;

}


function getAllcategories(){
   
  $conn = connect();

//2-creation de la requette
$requette = "SELECT * FROM categorie ";


//3-execution de la requette
$resultat = $conn->query($requette);



//4-resultat de la requette
$categories= $resultat->fetchALL();


return $categories;
}
function AddClient($data){
  $conn = connect();
   $mphash=md5($data['mdp']);
  $requette = "INSERT INTO client(nom,prenom,email,mdp,tel) VALUES ('".$data['nom']."','".$data['prenom']."','".$data['email']."','". $mphash."','".$data['tel']."')";
//execution
$resultat = $conn->query($requette);
if ($resultat){
  return true;
}else{
  return false;
}
}
function getAllproducts(){
  //1-connexion vers la BD
  $conn = connect();

//2-creation de la requette
$requette = "SELECT * FROM produit ";


//3-execution de la requette
$resultat = $conn->query($requette);



//4-resultat de la requette
$produits= $resultat->fetchALL();

//var_dump($categories);
return $produits;
}

function searchProduits($keywords){
  //1-connexion vers la BD
  $conn = connect();

  //2-creation de la requette
  $requette= "SELECT * FROM produit WHERE nom LIKE '%$keywords%'";

  //3-execution de la requette
$resultat = $conn->query($requette);

//4-resultat
$produits = $resultat->fetchAll();
return $produits; 
}
function ConnectClient($data){
  $conn = connect();
  $email = $data['email'];
  $mdp =md5( $data['mdp']); //hashage motde passe

  $requette = "SELECT * FROM client WHERE email='$email' AND mdp='$mdp'";

  $resultat = $conn->query($requette);
//l'execution
$client = $resultat->fetch();
//affichage d resultat
var_dump($client);

return $client;
}
function getProduitById($id){
  $conn = connect();

  //2-creation de la requette
  $requette = "SELECT * FROM produit WHERE id=$id";
  
  //3-execution de la requette
$resultat = $conn->query($requette);

//4-resultat
$produit = $resultat->fetch();
return $produit; 
}
function ConnectAdmin($data){
  $conn = connect();
  $email = $data['email'];
  $mdp = md5($data['mdp']); //hashage motde passe

  $requette = "SELECT * FROM admin WHERE email='$email' AND mdp='$mdp'";

  $resultat = $conn->query($requette);
//l'execution
$user = $resultat->fetch();
var_dump($user);

return $user;
}
/** 




function getProduitById($id){
  $conn = connect();

  //2-creation de la requette
  $requette = "SELECT * FROM produits WHERE id=$id";
  
  //3-execution de la requette
$resultat = $conn->query($requette);

//4-resultat
$produit = $resultat->fetch();
return $produit; 
}
function addvisiteur($data){
  $conn = connect();
$mphash = md5($data['mp']);
  $requette = "INSERT INTO visiteurs(nom,prenom,email,mp,telephone) VALUES ('".$data['nom']."','".$data['prenom']."','".$data['email']."','".$mphash."','".$data['telephone']."')";
//execution
$resultat = $conn->query($requette);
if ($resultat){
  return true;
}else{
  return false;
}

}
function ConnectVisiteur($data){
  $conn = connect();
  $email = $data['email'];
  $mp = md5($data['mp']); //hashage motde passe

  $requette = "SELECT * FROM visiteurs WHERE email='$email' AND mp='$mp'";

  $resultat = $conn->query($requette);
//l'execution
$user = $resultat->fetch();
//affichage d resultat
//var_dump($user);

return $user;
}

function ConnectAdmin(){
  $conn = connect();
  $email = $data['email'];
  $mp = md5($data['mp']); //hashage motde passe

  $requette = "SELECT * FROM administrateur WHERE email='$email' AND mp='$mp'";

  $resultat = $conn->query($requette);
//l'execution
$user = $resultat->fetch();


return $user;
}
*/
?>