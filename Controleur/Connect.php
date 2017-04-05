<?php

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

if(isset($_POST['login'])){

    $request = "SELECT * FROM membre WHERE mail = ".$email;
    $respond = $bdd->query($request);
    $donnees = $respond->fetch();
    $connected = 1;

    while($donnees && $connected != 2)
    {
        $password= sha1($password);
        if($password == $donnees['Password'])
        {
            $_SESSION['datas'] = $donnees;
            var_dump($_SESSION);
            $connected = 0;
            $_SESSION['connected'] = true;
            echo "Bienvenue ".$_SESSION['datas']['Name'];
            header("Location: index.php");
        }
        else
        {
            $connected = 2;
            echo "<script language='JavaScript'>alert(\"Erreur de connexion\")</script>";
            sleep(2);
            header("Location: index.php");
        }
    }
    if ($connected==1)
    {
        echo "<script language='JavaScript'>alert(\"Le compte n'existe pas\")</script>";
        sleep(2);
        header("Location: index.php");
    }
}