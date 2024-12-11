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