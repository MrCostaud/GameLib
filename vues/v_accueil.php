<?php
include "includes/header.php";  
?>
<link href="includes/css/vues.css" rel="stylesheet">
<body>
    <div class="container-main">
        <h2>Collection de Mr Dallier</h2>
    </div>
</body>
<footer>
    <?php
    if($_SESSION['autorisation'] == 1){
    ?>
    <div class="btn">
        <input type="button" style="text-align: center;font-size: 35px;background-color: #fd0202;border-radius: 20px;margin-left: 35px;margin-bottom: 35px;border: 4px solid #d61c1c; /* Bordure plus épaisse */width: 250px;height: 60px; /* Ajuster la taille du bouton */" hover="background-color: rgba(193, 142, 95, 0.9);" value="Déconnexion" onclick="location.href='index.php?uc=connexion&action=deconnexion'" />
    </div>
    <?php
    }
    else{
    ?>
    <div class="btn">
        <input type="button" style="text-align: center;font-size: 35px;background-color: #3cfc39;border-radius: 20px;margin-left: 35px;margin-top: auto;margin-bottom: 35px;border: 4px solid #3fc93c; /* Bordure plus épaisse */width: 250px;height: 60px; /* Ajuster la taille du bouton */" value="Connexion" onclick="location.href='index.php?uc=connexion&action=arrive'" />
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
        width: 100%;
        padding: 20px;
    }
    .btn input {
        border-radius: 20px;
        margin: 10px;
        padding: 10px 20px;
        font-size: 20px;
        cursor: pointer;
        border: 4px solid;
        width: 250px; 
        height: 60px; 
    }
</style>
