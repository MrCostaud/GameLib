<?php
$action = isset($action) ? $action : "jeu";

switch ($action) {
    case "jeu": {
            $lesJeux = getAllJeux();
            include "vues/v_consultation_jeux.php";
            break;
        }
}