<?php
include "includes/header.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['amiibo_id'])) {
    $amiibo_id = intval($_POST['amiibo_id']);


    suppAmiibo($amiibo_id);

    header("Location: index.php?uc=amiibo&action=amiibo");
    exit; 
}
?>

<link href="includes/css/vues.css" rel="stylesheet">

<body>
    <div class="container-main">
        <h2 style="color: #111;">Collection d'Amiibo</h2>
    </div>
    <div class="console-container">
    <?php
    foreach ($lesAmiibos as $leAmiibo) {
        echo '<div class="console-box">';
        echo '<h3>' . htmlspecialchars($leAmiibo['nom_amiibo']) . '</h3>';
        echo '<img src="' . htmlspecialchars($leAmiibo['img_amiibo']) . '" alt="' . htmlspecialchars($leAmiibo['nom_amiibo']) . '">';
        echo '<p>État : ' . htmlspecialchars($leAmiibo['etat']) . '</p>';
        if ($_SESSION['autorisation'] == 1) {
            echo '<div class="btn">';
            echo '<form method="post" action="index.php?uc=amiibo&action=amiibo">';
            echo '<input type="hidden" name="amiibo_id" value="' . htmlspecialchars($leAmiibo['id']) . '">';
            echo '<input type="submit" style="text-align: center; font-size: 35px; background-color: #fd0202; border-radius: 20px; border: 4px solid #d61c1c; width: 200px; height: 50px;" value="Supprimer">';
            echo '</form>';
            echo '</div>';
        }
        echo '</div>';
    }
    ?>
    </div>
</body>
