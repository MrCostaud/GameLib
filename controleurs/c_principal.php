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
    }
}
?>
