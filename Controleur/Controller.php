<?php
include_once('Modele/RequestSQL.php');

function index()
{
   // $index = index();
    include_once('vue/index.php');
}

function userProfile($idUser)
{
    $user = UserInformation($idUser);
    include_once('Vue/user.php');
}