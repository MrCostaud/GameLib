<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="img" href="includes\img\logo.png" heigth="4" width="4">
    <title>GameLib</title>
    <link href="includes/css/style-header.css" rel="stylesheet">
</head>
<body>
    <div class="haut">
        <div class="name">
            <h1> GameLib </h1>
        </div>
        <div class="navbar">
            <div class="elements">
                <a href="index.php?uc=accueil&action=accueil">Accueil</a>
                
                <!-- Dropdown for Consultation -->
                <div class="dropdown">
                    <button class="dropbtn">
                        Consultation
                        <span>▼</span>
                    </button>
                    <div class="dropdown-content">
                        <a href="index.php?uc=consultation&action=jeux">Jeux</a>
                        <a href="index.php?uc=consultation&action=console">Console</a>
                        <a href="index.php?uc=consultation&action=amiibo">Amiibo</a>
                    </div>
                </div>

                <div class="dropdown">
                    <button class="dropbtn">
                        Gestion
                        <span>▼</span>
                    </button>
                    <div class="dropdown-content">
                        <a href="index.php?uc=consultation&action=jeux">Insertion</a>
                        <a href="index.php?uc=consultation&action=console">Modification</a>
                    </div>
                </div>

                <a href="index.php?uc=modisup&action=modisup">Statistiques</a>
            </div>
        </div>
    </div>
</body>
</html>
