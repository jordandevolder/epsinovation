<?php
/**
 * Created by PhpStorm.
 * User: Jules
 * Date: 29/12/2016
 * Time: 11:29
 */

define("HOST_BDD", "localhost"); // Host de la base de données
define("NAME_BDD", "EPSInnovation"); // Nom de la base de données
define("USER_BDD", "unov"); // Identifiant pour se connecter à la base de données
define("PASS_BDD", "epsiNnovation");


/*define("HOST_BDD", "mysql.hostinger.fr"); // Host de la base de données
define("NAME_BDD", "u642600090_googl"); // Nom de la base de données
define("USER_BDD", "u642600090_googl"); // Identifiant pour se connecter à la base de données
define("PASS_BDD", "q6w0AHGQ8z");*/

try
{
    //$bdd = new PDO('mysql:host='.HOST_BDD.';dbname='.NAME_BDD.';charset=utf8', USER_BDD , PASS_BDD);
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
?>

