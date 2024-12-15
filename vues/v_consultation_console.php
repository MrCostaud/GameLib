<?php
include "includes/header.php";
?>
<link href="includes/css/vues.css" rel="stylesheet">

<body>
    <div class="container-main">
        <h2 style="color: #111;">Collection de consoles</h2>
    </div>
    <div class="console-container">
    <?php
    foreach ($lesConsoles as $laConsole) {
        echo '<div class="console-box">';
        echo '<h3>' . htmlspecialchars($laConsole['nom_console']) . '</h3>';
        echo '<img src="' . htmlspecialchars($laConsole['img_console']) . '" alt="' . htmlspecialchars($laConsole['nom_console']) . '">';
        echo '<p>État : ' . htmlspecialchars($laConsole['etat']) . '</p>';
        echo '</div>';
    }
    ?>
    </div>
</body>