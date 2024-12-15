<?php
if (isset($uc)) {
    switch ($uc) {
        case "accueil": {
                $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : "accueil";
                include "controleurs/c_accueil.php";
                break;
            }
        case "connexion": {
                include "controleurs/c_connexion.php";
                break;
            }
        case "console": {
                include "controleurs/c_console.php";
                break;
            }
        case "jeux": {
            include "controleurs/c_jeu.php";
            break;
        }   
        case "amiibo": {
            include "controleurs/c_amiibo.php";
            break;
        }    
    }
}
