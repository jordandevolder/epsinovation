<?php


function indexTest()
{
    global $bdd;
    //$categoriePrincipale = $bdd->prepare("SELECT * FROM Categorie WHERE id_categorie_pere=".$idCat);
    //$categoriePrincipale->execute();
    //$donnees=$categoriePrincipale->fetchAll();
    //return $donnees;
}

/*function getInfoByMail($email)
{
    global $bdd;
    $categoriePrincipale = $bdd->prepare("SELECT * FROM user WHERE email=".$email);
    $categoriePrincipale->execute();
    $donnees=$categoriePrincipale->fetchAll();
    return $donnees;
}*/

function UserInformation($idUser)
{
    global $bdd;
    $userInformation = $bdd -> prepare("SELECT * FROM user WHERE id = ".$idUser);
    $userInformation->execute();
    $donnees = $userInformation->fetchAll();
    return $donnees;

}