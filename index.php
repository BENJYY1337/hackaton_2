<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
                <?= $_GET['erreur']; ?>
            </div>
        <?php
        }
        ?>
        <input type="submit" value="Rechercher">
    </form>

</body>

</html>