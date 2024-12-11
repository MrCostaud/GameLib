<!DOCTYPE html>
<html>
<link href="includes/css/vues.css" rel="stylesheet">
<body class="body-connexion">
    <div class="container-connexion">
        <h1><strong style="color:#fff;" class="h1-connexion">Connexion</strong></h1>
        <form action="index.php?uc=connexion&action=connexion" method="POST">
            <input class="input-text" type="text" id="username" name="username" placeholder="Nom d'utilisateur" required><br>
            <input class="input-text" type="password" id="password" name="password" placeholder="Mot de passe" required><br>
            <input class="btn-connexion" type="submit" value="Se connecter">
        </form>
    </div>
</body>
</html>
