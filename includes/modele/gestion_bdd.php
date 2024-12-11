<?php
function getAcces($username, $password)
{
    require "connexion.php";
    $sql = "SELECT id FROM user WHERE login = :username AND mdp = :password";
    $exec = $bdd->prepare($sql);
    $exec->bindParam(':username', $username);
    $exec->bindParam(':password', $password);
    $exec->execute();

    $ligne = $exec->fetch();
    if (!$ligne) {
        return "error";
    } else {
        return $ligne['id'];
    }
}

function getAllConsoles()
{
    require "connexion.php";
    $sql = "SELECT console.id, nom_console, img_console, etat 
    FROM console
    INNER JOIN etat on etat_console_id = etat.id";
    $exec = $bdd->prepare($sql);
    $exec->execute();
    $curseur = $exec->fetchAll();
    return $curseur;
}

function getAllAmiibo()
{
    require "connexion.php";
    $sql = "SELECT * FROM amiibo";
    $exec = $bdd->prepare($sql);
    $exec->execute();
    $curseur = $exec->fetchAll();
    return $curseur;
}

function getAllJeux()
{
    require "connexion.php";
    $sql = "SELECT * FROM jeu";
    $exec = $bdd->prepare($sql);
    $exec->execute();
    $curseur = $exec->fetchAll();
    return $curseur;
}

function addAmiibo($etat, $nom, $img)
{
    require "connexion.php";
    $sql = "insert into amiibo values($etat, $nom, $img)";
    $exec = $bdd->prepare($sql);
    $exec->execute();
}

function modifAmiibo($idAmiibo, $etat, $nom, $img) {
    require "connexion.php";
    $sql = "UPDATE amiibo SET etat_amiibo_id=$etat, nom_amiibo=$nom, img_amiibo=$img where id=$idAmiibo";
    $exec = $bdd->prepare($sql);
    $exec->execute();
}

function suppAmiibo($idAmiibo)
{
    require "connexion.php";
    $sql = "delete from amiibo where id=$idAmiibo";
    $exec = $bdd->prepare($sql);
    $exec->execute();
}


?>