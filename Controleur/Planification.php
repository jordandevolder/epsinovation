<?php
/**
 * Created by PhpStorm.
 * User: Lokmane
 * Date: 07/04/2017
 * Time: 10:01
 */

global $bdd;

$array_ret = $_POST;


$datePlanif = $array_ret['dateplanif'];
$qteinsuline = $array_ret['qteinsuline'];


$query = $bdd->prepare("INSERT INTO user(dateheure, dose) VALUES (:datePlanif, :qteinsuline)");
$query->execute(array(':datePlanif' => $datePlanif,
    ':qteinsuline' => $qteinsuline)) ;

echo "<script>document.location.replace('../blog.php?action=planif');</script>";



