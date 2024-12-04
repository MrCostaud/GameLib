<?php
$action = isset($action) ? $action : "accueil";

switch ($action) {
    case "accueil": {
        include "vues/v_accueil.php";
        break;
    }
}

?>