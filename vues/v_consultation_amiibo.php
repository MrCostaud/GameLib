<?php
include "includes/header.php";
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
        echo '</div>';
    }
    ?>
    </div>
</body>