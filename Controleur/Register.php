<?php

session_start();
include_once('../Modele/config.php');
global $bdd;
define('MAXSIZE', 30000000);

$nom = "";
$prenom = "";
$email = "";
$password = "";
$telephone = "";
$role = "";

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
if(isset($_POST['role'])) {
    $role = $_POST['role'];
}

if(isset($_POST['register'])){


    $password = sha1($password);

    $respond = $bdd->prepare("INSERT INTO user(nom, prenom, password, email, telephone, role) VALUES (:nom, :prenom, :password, :email, :telephone, :role)");
    $respond->execute(array(':nom' => $nom,
                            ':prenom' => $prenom,
                            ':email' => $email,
                            ':password' => $password, 
                            ':telephone' => $telephone,
                            ':role' => $role));

    echo "<script>document.location.replace('../blog.php');</script>";

}