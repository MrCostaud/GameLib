<?php
include "includes/header.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['console_id'])) {
    $console_id = intval($_POST['console_id']);


    suppConsole($console_id);

    header("Location: index.php?uc=console&action=console");
    exit; 
}
?>
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
        if ($_SESSION['autorisation'] == 1) {
            echo '<div class="btn">';
            echo '<form method="post" action="index.php?uc=console&action=console">';
            echo '<input type="hidden" name="console_id" value="' . htmlspecialchars($laConsole['id']) . '">';
            echo '<input type="submit" style="text-align: center; font-size: 35px; background-color: #fd0202; border-radius: 20px; border: 4px solid #d61c1c; width: 200px; height: 50px;" value="Supprimer">';
            echo '</form>';
            echo '</div>';
        }
        echo '</div>';
    }
    ?>
    </div>
</body>