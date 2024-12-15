<?php
$action = isset($action) ? $action : "amiibo";

switch ($action) {
    case "amiibo": {
            $lesAmiibos = getAllAmiibo();
            include "vues/v_consultation_amiibo.php";
            break;
        }
}
?>
