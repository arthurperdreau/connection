<?php
//php et redirections (header) uniquement

$users = [
    "luc"=> "motDePasseDeLuc4",
    "michel"=> "pasteque",
    "eglantine"=> "choucroute",
    "patricia"=> "surf"
];
$goodUser=false;
$username=null;
$password=null;
if(empty($_POST["username"]) && !ctype_alnum($_POST["username"]))
{
    header("location: index.php");
}
$username = $_POST["username"];

if(empty($_POST["password"]) && $_POST["password"] == ""){
    header("location: index.php");
}
$password = $_POST["password"];

foreach ($users as $user => $value) {
    if($username == $user && $password == $value){
       $goodUser = true;
    }
}
if($goodUser){
    header("location: resultat.php");
}else{
    header("location: index.php");
}
//
//les bons utilisateurs et mot de passe
// peuvent se connecter, les autres sont renvoyés à l'accueil
//
//Sur une connection réussie, on renvoie vers la page résultat qui dit bravo.
//elle a un bouton déconnexion (retour accueil)
//
//JEUX SQL :
// https://sql-island.informatik.uni-kl.de/
//https://mystery.knightlab.com/
?>

