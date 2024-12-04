<?php
session_start();
include "includes/modele/connexion.php";
include "includes/modele/gestion_bdd.php";

// Vérifiez si la variable 'uc' est définie dans la requête, sinon définissez-la à "accueil"
$uc = isset($_REQUEST['uc']) ? $_REQUEST['uc'] : "accueil";

include "controleurs/c_principal.php";
?>