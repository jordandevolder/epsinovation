<?php

include_once('config.php');

function indexTest() {
    //global $bdd;
    //$categoriePrincipale = $bdd->prepare("SELECT * FROM Categorie WHERE id_categorie_pere=".$idCat);
    //$categoriePrincipale->execute();
    //$donnees=$categoriePrincipale->fetchAll();
    //return $donnees;
}

/*function getInfoByMail($email) {
    global $bdd;
    $categoriePrincipale = $bdd->prepare("SELECT * FROM user WHERE email=".$email);
    $categoriePrincipale->execute();
    $donnees=$categoriePrincipale->fetchAll();
    return $donnees;
}*/

function getInjectionsReportsByDay() {
    if(isset($_SESSION['datas']['id'])) {
        global $bdd;
        $query = $bdd->prepare("SELECT heure, valeur FROM reportinjection WHERE user_id=:id");
        $query->execute(array(':id' => $_SESSION['datas']['id']));
        $answer=$query->fetchAll();
        return $answer;
    } else {
        return null;
    }
}

function getGlycemieReportsByDay() {
    if(isset($_SESSION['datas']['id'])) {
        global $bdd;
        $query = $bdd->prepare("SELECT heure, valeur FROM reportglycemie WHERE user_id=:id");
        $query->execute(array(':id' => $_SESSION['datas']['id']));
        $answer=$query->fetchAll();
        return $answer;
    } else {
        return null;
    }

}

function UserInformation($idUser) {
    global $bdd;
    $userInformation = $bdd -> prepare("SELECT * FROM user WHERE id = ".$idUser);
    $userInformation->execute();
    $donnees = $userInformation->fetchAll();
    return $donnees;
}