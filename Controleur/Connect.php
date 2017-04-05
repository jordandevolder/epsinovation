<?php
session_start();
include_once('../Modele/config.php');
global $bdd;

$email = "";
$password = "";


if(isset($_POST['email']))
{
    $email = $_POST['email'];
}

if(isset($_POST['password']))
{
    $password = $_POST['password'];
}

if(isset($_POST['login'])) {
    $respond = $bdd->prepare("SELECT * FROM user WHERE email = :email");
    $respond->execute(array(':email' => $email));
    $donnees=$respond->fetch();
    $connected = 1;
    while ($donnees && $connected != 2) {
        $password = sha1($password);

        if($password == $donnees['password'])
        {
            $_SESSION['datas'] = $donnees;
            $connected = 0;
            $_SESSION['connected'] = true;
            echo "<script>document.location.replace('../blog.php');</script>";
        }
        else
        {
            $connected = 2;
            echo "<script language='JavaScript'>alert(\"Erreur de connexion\")</script>";
        }
    }
    if ($connected==1)
    {
        echo "<script language='JavaScript'>alert(\"Le compte n'existe pas\")</script>";
    }
}