<?php
$action = isset($action) ? $action : "console";

switch ($action) {
    case "console": {
            $lesConsoles = getAllConsoles();
            include "vues/v_consultation_console.php";
            break;
        }
}
