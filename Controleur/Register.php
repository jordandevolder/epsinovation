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
    echo "ok";

    $respond = $bdd->prepare("INSERT INTO user VALUES (:nom, :prenom, :email, :password, :telephone)");
    //$respond->execute(array(':nom' => $nom,
                            ':prenom' => $prenom,
                            ':email' => $email,
                            ':password' => $password, 
                            ':telephone' => $telephone));

}