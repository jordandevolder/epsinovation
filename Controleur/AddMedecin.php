<?php

session_start();
include_once('../Modele/config.php');
global $bdd;

$idMedecin = "";

if(isset($_POST['medecin']))
{
    $idMedecin = $_POST['medecin'];
}

echo $idMedecin;

$respond = $bdd->prepare("UPDATE user set id_medecin = :id_medecin WHERE id = ".$_SESSION['datas']['id']);
$respond->execute(array(':id_medecin' => $idMedecin));
$_SESSION['datas']['id_medecin'] = $idMedecin;
echo "<script>document.location.replace('../blog.php?action=user');</script>";