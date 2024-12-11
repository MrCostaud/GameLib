<?php

$action = isset($_GET['action']) ? $_GET['action'] : 'arrive';

switch($action) {
    case 'arrive':
        include("vues/v_connexion.php");
        break;
    case 'deconnexion':
        $_SESSION['autorisation'] = 0;
        header("Location: index.php?uc=accueil");
        break;
    case 'connexion':
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = getAcces($username, $password);
        if ($user != "error" && $user == 1) {
            $_SESSION['autorisation'] = $user;
            header("Location: index.php?uc=accueil");
            break;
        } else {
            header("Location: index.php?uc=accueil");
            break;
        }
    }
?>