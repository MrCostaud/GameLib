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

<<<<<<< HEAD
function addJeu($console, $etat, $jeu, $image)
{
    require "connexion.php";
    $sql = "Insert into jeu values($console, $etat, $jeu, $image)";
=======
function addAmiibo($etat, $nom, $img)
{
    require "connexion.php";
    $sql = "insert into amiibo values($etat, $nom, $img)";
>>>>>>> origin/dev
    $exec = $bdd->prepare($sql);
    $exec->execute();
}

<<<<<<< HEAD
function modifJeu($idjeu, $console, $etat, $jeu, $image)
{
    require "connexion.php";
    $sql = "Update jeu set console_jeu_id=$console, etat_jeu_id=$etat, nom_jeu=$jeu, img_jeu$image where id=$idjeu";
=======
function modifAmiibo($idAmiibo, $etat, $nom, $img) {
    require "connexion.php";
    $sql = "UPDATE amiibo SET etat_amiibo_id=$etat, nom_amiibo=$nom, img_amiibo=$img where id=$idAmiibo";
>>>>>>> origin/dev
    $exec = $bdd->prepare($sql);
    $exec->execute();
}

<<<<<<< HEAD
function suppJeu($idjeu)
{
    require "connexion.php";
    $sql = "Delete from jeu where id=$idjeu";
    $exec = $bdd->prepare($sql);
    $exec->execute();
}

function addConsole($etat, $console, $image)
{
    require "connexion.php";
    $sql = "Insert into console values($etat, $console, $image)";
    $exec = $bdd->prepare($sql);
    $exec->execute();
}

function modifConsole($idconsole, $etat, $console, $image)
{
    require "connexion.php";
    $sql = "Update console set etat_console_id=$etat, nom_console=$jeu, img_console$image where id=$idconsole";
    $exec = $bdd->prepare($sql);
    $exec->execute();
}

function suppConsole($idconsole)
{
    require "connexion.php";
    $sql = "Delete from console where id=$idconsole";
=======
function suppAmiibo($idAmiibo)
{
    require "connexion.php";
    $sql = "delete from amiibo where id=$idAmiibo";
>>>>>>> origin/dev
    $exec = $bdd->prepare($sql);
    $exec->execute();
}


?>