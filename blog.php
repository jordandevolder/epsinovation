<?php

session_start();

include_once('Modele/config.php');

include_once('Controleur/Controller.php');

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
        else if($_GET['action'] == 'myDaily'){ // Si il n'y a pas d'ID
           // getAllNews();
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






