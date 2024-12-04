<?php
if (isset($uc)) {
    switch ($uc) {
        case "accueil": {
            $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : "accueil";
            include "controleurs/c_accueil.php";
            break;
        }
    }
}
?>
