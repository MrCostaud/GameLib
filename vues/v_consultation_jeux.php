<?php
include "includes/header.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['jeu_id'])) {
    $jeu_id = intval($_POST['jeu_id']);


    suppJeu($jeu_id);

    header("Location: index.php?uc=jeux&action=jeu");
    exit; 
}
?>
<link href="includes/css/vues.css" rel="stylesheet">

<body>
    <div class="container-main">
        <h2 style="color: #111;">Collection de Jeux</h2>
    </div>
    <div class="jeux-container">
    <?php
    foreach ($lesJeux as $lejeu) {
        echo '<div class="jeux-box">';
        echo '<h3>' . htmlspecialchars($lejeu['nom_jeu']) . '</h3>';
        echo '<img src="' . htmlspecialchars($lejeu['img_jeu']) . '" alt="' . htmlspecialchars($lejeu['nom_jeu']) . '">';
        echo '<p>Console : ' . getConsole($lejeu['console_jeu_id']) . '</p>';
        echo '<p>État : ' . getEtat($lejeu['etat_jeu_id']) . '</p>';
        if ($_SESSION['autorisation'] == 1) {
            echo '<div class="btn">';
            echo '<form method="post" action="index.php?uc=jeux&action=jeu">';
            echo '<input type="hidden" name="jeu_id" value="' . htmlspecialchars($lejeu['id']) . '">';
            echo '<input type="submit" style="text-align: center; font-size: 35px; background-color: #fd0202; border-radius: 20px; border: 4px solid #d61c1c; width: 200px; height: 50px;" value="Supprimer">';
            echo '</form>';
            echo '</div>';
        }
        echo '</div>';
    }
    ?>
    </div>
</body>
