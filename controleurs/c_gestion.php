<?php
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : "jeux";


switch ($action) {
    case "jeux": {
            $lesJeux = getAllJeux();
            $lesConsoles = getAllConsoles();
            $lesEtats = getAllEtat();
            include "vues/v_gestion_jeux.php";
            break;
        }
    case "console": {
            $lesConsoles = getAllConsoles();
            $lesEtats = getAllEtat();
            include "vues/v_gestion_console.php";
            break;
        }
    case "amiibo": {
            $lesAmiibos = getAllAmiibo();
            $lesEtats = getAllEtat();
            include "vues/v_gestion_amiibo.php";
            break;
        }
    case "ajouterJeu": {
        $console = $_POST['console'];
        $etat = $_POST['etat'];
        $nom = $_POST['nom'];
        $lienImage = $_POST['lienImage'];
        addJeu($console, $etat, $nom, $lienImage);
        header("Location: index.php?uc=jeux&action=jeux");
        break;
    }
    case "ajouterConsole": {
        $etat = $_POST['etat'];
        $nom = $_POST['nom'];
        $lienImage = $_POST['lienImage'];
        addConsole($etat, $nom, $lienImage);
        header("Location: index.php?uc=console&action=console");
        break;
    }
    case "ajouterAmiibo": {
        $etat = $_POST['etat'];
        $nom = $_POST['nom'];
        $lienImage = $_POST['lienImage'];
        addAmiibo($etat, $nom, $lienImage);
        header("Location: index.php?uc=amiibo&action=amiibo");
        break;
    }
}
