<?php

session_start();
include_once('../Modele/config.php');
global $bdd;

$nom = "";
$prenom = "";
$email = "";
$password = "";
$telephone = "";

if(isset($_POST['nom']))
{
    $nom = $_POST['nom'];
}
if(isset($_POST['prenom']))
{
    $prenom = $_POST['prenom'];
}
if(isset($_POST['email']))
{
    $email = $_POST['email'];
}
if(isset($_POST['password']))
{
    $password = $_POST['password'];
}
if(isset($_POST['telephone']))
{
    $telephone = $_POST['telephone'];
}

if(isset($_POST['register'])){
    $password = sha1($password);

    $respond = $bdd->prepare("INSERT INTO user(nom, prenom, password, email, telephone) VALUES (:nom, :prenom, :password, :email, :telephone)");
    $respond->execute(array(':nom' => $nom,
                            ':prenom' => $prenom,
                            ':email' => $email,
                            ':password' => $password, 
                            ':telephone' => $telephone));

    echo "<script>document.location.replace('../blog.php');</script>";

}