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

    $query = $bdd->query("SELECT * FROM user");
    while($donnes = $query->fetch())
    {
        echo $donnes['nom'];
    }

}