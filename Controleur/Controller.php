<?php
include_once('Modele/RequestSQL.php');

function index()
{
   // $index = index();
    include_once('Vue/index.php');
}

function userProfile($idUser)
{
    $medecin = getMedecin();
    $user = UserInformation($idUser);
    $informations = getInfoMedecinByIdUser($idUser);
    include_once('Vue/user.php');
}

function medecin()
{
    //$medecin = getMedecin();
    //include_once('Vue/interface.php');
}