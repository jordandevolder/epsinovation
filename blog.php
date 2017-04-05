<?php
session_start();

include_once('Controleur/Controller.php');
include_once('Vue/header.php');

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'categorie') { // On récupère le nom de l'action
            if (isset($_GET['id'])) { // Si un Id est passé en param on le récupère pour le param de la requete
                $idCat = intval($_GET['id']);
                if ($idCat != 0) {
                   // categorie($idCat); // On fait reference à la fonction qui appelle la Requete dans un fichier Controller
                }
            }
        }
        if ($_GET['action'] == 'categorie') { // On récupère le nom de l'action
            if (isset($_GET['id'])) { // Si un Id est passé en param on le récupère pour le param de la requete
                $idCat = intval($_GET['id']);
                if ($idCat != 0) {
                    // categorie($idCat); // On fait reference à la fonction qui appelle la Requete dans un fichier Controller
                }
            }
        }
        if ($_GET['action'] == 'user') { // On récupère le nom de l'action
            /*if() {

            }*/
            if (isset($_SESSION['datas']['id'])) { // Si un Id est passé en param on le récupère pour le param de la requete
                $idUser = intval($_SESSION['datas']['id']);
                if ($idUser != 0) {
                    userProfile($idUser);
                }
                include_once('Vue/user.php');
            } else {
                include_once('Vue/connection.php');
            }
        }

        else if($_GET['action'] == 'disconnect'){ // Si il n'y a pas d'ID
           include_once('Vue/disconnect.php');
        }
        else if($_GET['action'] == 'mentions') {
            include_once('Vue/mentionsLegales.php');
        }
        else if($_GET['action'] == 'suivi') {
            include_once('Vue/suivi.php');
        }
    }
    else {
        index();

    }

    include_once 'vue/footer.php';
}
catch (Exception $e) {
    erreur($e->getMessage());
}






