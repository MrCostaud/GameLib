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
<style>

.formAmiibo {
    display: flex;
    justify-content: center; 
    align-items: center;
    margin: 0;
}

h1 {
    text-align: center;
    margin-bottom: 20px;
    font-size: 1.8rem;
    color: #fff;
}


form {
    background-color: #3a4355; 
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    width: 400px;
}


form div {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
}

label {
    flex: 1;
    font-size: 1rem;
    color: #ffffff;
    text-align: right;
    margin-right: 10px;
}

input,
select {
    flex: 2;
    padding: 8px;
    border: none;
    border-radius: 5px;
    font-size: 1rem;
    box-sizing: border-box;
}

input[type="text"],
input[type="url"],
select {
    background-color: #ffffff;
    color: #333;
}

input:focus,
select:focus {
    outline: 2px solid #00c851; 
}


button {
    display: block;
    width: 100%;
    padding: 10px;
    margin-top: 10px;
    background-color: #00c851; 
    color: #ffffff;
    font-weight: bold;
    font-size: 1.1rem;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-align: center;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #009e42; 
}


@media (max-width: 600px) {
    form {
        width: 90%;
        padding: 15px;
    }

    label {
        font-size: 0.9rem;
    }

    button {
        font-size: 1rem;
    }
}

</style>

<body>
<h1>Ajouter un Amiibo</h1>
<div class="formAmiibo">
    <form action="index.php?uc=gestion&action=ajouterAmiibo" method="post">
        <div>
            <label for="nom">Nom de l'Amiibo :</label>
            <input type="text" id="nom" name="nom" required placeholder="Entrez le nom de l'Amiibo">
        </div>


        <div>
            <label for="etat">État :</label>
            <select id="etat" name="etat" required>
                <option value="" disabled selected>Choisissez l'état</option>
                <?php foreach ($lesEtats as $lEtat) : ?>
                    <option value="<?= htmlspecialchars($lEtat['id']) ?>"><?= ucfirst(htmlspecialchars($lEtat['etat'])) ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div>
            <label for="lienImage">Lien de l'image :</label>
            <input type="text" id="lienImage" name="lienImage" required placeholder="Entrez un lien d'image valide">
        </div>

        <div>
            <button type="submit">Ajouter l'Amiibo</button>
        </div>
    </form>
</div>
</body>
