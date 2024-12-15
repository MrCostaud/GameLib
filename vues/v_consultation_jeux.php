<?php
include "includes/header.php";
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
        echo '</div>';
    }
    ?>
    </div>
</body>
