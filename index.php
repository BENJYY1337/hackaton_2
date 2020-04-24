<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>

</head>

<body>

    <form method="POST" action="fiche_personnage/view.php">

        <div class="personnage">
            <input type="text" name="personnage" placeholder="Pseudo">
        </div>
        <?php
        if (isset($_GET['erreur'])) {
        ?>
            <div class="alert alert-danger" role="alert">
                Pas de personnage <?= $_GET['message']; ?>
            </div>
        <?php
        }
        ?>
        <input type="submit" value="Rechercher">
    </form>

</body>

</html>