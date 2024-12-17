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
    $sql = "SELECT amiibo.id, etat_amiibo_id, nom_amiibo, img_amiibo, etat FROM amiibo  INNER JOIN etat on etat_amiibo_id = etat.id";
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

function getAllEtat()
{
    require "connexion.php";
    $sql = "SELECT * FROM etat";
    $exec = $bdd->prepare($sql);
    $exec->execute();
    $curseur = $exec->fetchAll();
    return $curseur;
}


function addJeu($console, $etat, $jeu, $image)
{
    try {
        require "connexion.php"; 
        $sql = "INSERT INTO jeu (console_jeu_id, etat_jeu_id, nom_jeu, img_jeu) 
                VALUES (:console, :etat, :jeu, :image)";
        
        $exec = $bdd->prepare($sql);

        $exec->bindParam(':console', $console, PDO::PARAM_INT);
        $exec->bindParam(':etat', $etat, PDO::PARAM_INT);
        $exec->bindParam(':jeu', $jeu, PDO::PARAM_STR);
        $exec->bindParam(':image', $image, PDO::PARAM_STR);

        $exec->execute();
        
        return true;
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
        return false;
    }
}

function addAmiibo($etat, $nom, $img)
{
    try {
        require "connexion.php";

        $sql = "INSERT INTO amiibo (etat_amiibo_id, nom_amiibo, img_amiibo) 
                VALUES (:etat, :nom, :img)";

        $exec = $bdd->prepare($sql);

        $exec->bindParam(':etat', $etat, PDO::PARAM_INT);
        $exec->bindParam(':nom', $nom, PDO::PARAM_STR);
        $exec->bindParam(':img', $img, PDO::PARAM_STR);

        $exec->execute();
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}


function addConsole($etat, $console, $image)
{
    try {
        require "connexion.php";

        $sql = "INSERT INTO console (etat_console_id, nom_console, img_console) 
                VALUES (:etat, :console, :image)";

        $exec = $bdd->prepare($sql);

        $exec->bindParam(':etat', $etat, PDO::PARAM_INT);
        $exec->bindParam(':console', $console, PDO::PARAM_STR);
        $exec->bindParam(':image', $image, PDO::PARAM_STR);

        $exec->execute();
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}


function modifJeu($idjeu, $console, $etat, $jeu, $image)
{
    require "connexion.php";
    $sql = "Update jeu set console_jeu_id=$console, etat_jeu_id=$etat, nom_jeu=$jeu, img_jeu$image where id=$idjeu";
    $exec = $bdd->prepare($sql);
    $exec->execute();
}

function modifAmiibo($idAmiibo, $etat, $nom, $img) {
    require "connexion.php";
    $sql = "UPDATE amiibo SET etat_amiibo_id=$etat, nom_amiibo=$nom, img_amiibo=$img where id=$idAmiibo";
    $exec = $bdd->prepare($sql);
    $exec->execute();
}

function suppJeu($idjeu)
{
    require "connexion.php";
    $sql = "Delete from jeu where id=$idjeu";
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
    $sql = "Delete from jeu where console_jeu_id=$idconsole";
    $exec = $bdd->prepare($sql);
    $exec->execute();

    $sql = "Delete from console where id=$idconsole";
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

function getEtat($idetat)
{
    require "connexion.php";
    $sql = "SELECT etat FROM etat WHERE id = :id";
    $exec = $bdd->prepare($sql);
    $exec->bindParam(':id', $idetat, PDO::PARAM_INT); // Sécurisation via bindParam
    $exec->execute();
    $curseur = $exec->fetch(PDO::FETCH_ASSOC); // Récupère un tableau associatif
    return $curseur['etat'] ?? null; // Retourne la valeur ou null si non trouvé
}


function getConsole($idconsole)
{
    require "connexion.php";
    $sql = "SELECT nom_console FROM console WHERE id = :id";
    $exec = $bdd->prepare($sql);
    $exec->bindParam(':id', $idconsole, PDO::PARAM_INT); // Sécurisation via bindParam
    $exec->execute();
    $curseur = $exec->fetch(PDO::FETCH_ASSOC); // Récupère un tableau associatif
    return $curseur['nom_console'] ?? null; // Retourne la valeur ou null si non trouvé
}


?>