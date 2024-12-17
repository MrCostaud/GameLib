<?php
include "includes/header.php";  
?>
<link href="includes/css/vues.css" rel="stylesheet">
<body>
    <div class="container-main">
        <h2 style="color: #111; margin:0px; padding:0px;">Collection de Mr Dallier</h2>
    </div>
    <img style="max-height: 350px; width: 100%;"src="includes/img/fond.png">
</body>
<footer>
    <?php
    if ($_SESSION['autorisation'] == 1) {
    ?>
        <div class="btn">
            <input type="button" style="text-align: center; font-size: 35px; background-color: #fd0202; border-radius: 20px; border: 4px solid #d61c1c; width: 250px; height: 60px;" value="Déconnexion" onclick="location.href='index.php?uc=connexion&action=deconnexion'" />
        </div>
    <?php
    } else {
    ?>
        <div class="btn">
            <input type="button" style="text-align: center; font-size: 35px; background-color: #3cfc39; border-radius: 20px; border: 4px solid #3fc93c; width: 250px; height: 60px;" value="Connexion" onclick="location.href='index.php?uc=connexion&action=arrive'" />
        </div>
    <?php
    }
    ?>
</footer>

<style>
    footer {
        position: fixed;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 90px;
        padding: 20px;
    }

    /* Ensure .btn is properly centered inside the footer */
    .btn {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%; /* Takes up full width of the footer */
    }

    .btn input {
        border-radius: 20px;
        margin: 0; /* Remove any margin */
        padding: 10px 20px;
        font-size: 20px;
        cursor: pointer;
        border: 4px solid;
        width: 250px;
        height: 60px;
    }
</style>

