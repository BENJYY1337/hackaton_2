<?php

require('../models/HeroManager.php');
require('../models/Hero.php');

$nom = htmlspecialchars($_POST['personnage']);

$a = new heroManager;
$hero = $a->read($nom);

if ($nom !== $hero['nom_heros']) {
    header('location:../index.php?erreur=le%20personnage%20n\'existe%20pas');
}


$b = new hero;
$donnees = $b->hydrate($hero);

$vieMax = $b->get_vie_max_heros();
$force = $b->get_force_heros();
$nomHero = $b->get_nom_heros();
$vie = $b -> get_vie_heros();
$niveau = $b->get_niveau_heros();

$p=$vie/$vieMax*100;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="" href="style.css">
    <title></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<div class="hero">
        <?php
        if ($hero && $hero['nom_heros'] == "Sayuka") {
        ?>
            <img id="imgperso" src="../public/img/guerriere.png" alt="image de la guerriere" width="300px">
        <?php
        } else if ($hero && $hero['nom_heros'] == "Alahazar") {
        ?>
            <img id="imgperso" src="../public/img/guerrier.png" alt="image du guerrier" width="300px">
        <?php
        }
        ?>
        <h2><?php echo $nomHero; ?></h2>
        <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: <?php echo $p."%";?>" aria-valuenow="<?php echo $vie; ?>" aria-valuemin="0" aria-valuemax="<?php echo $vieMax; ?>"></div>
        <div>Force :<?php echo $force ?></div>
        <div>Niveau :<?php echo $niveau ?></div>
        
    

    <div>
        <button type="button" onclick=loadDoc()>Familier</button>

        <script>
            function loadDoc() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("familier").innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET", "familier.php", true);
                xhttp.send();
            }
        </script>
    </div>

    <div>BOUTON EFFACER</div>

    <div>BOUTON SE DECONNECTER</div>

    <div id="familier">
        <!-- ICI S'AFFICHERA LA REQUETE AJAX -->
    </div>

    <div>AFFICHAGE DES INFOS DU COOKIE</div>


    <!-- Optional JS - Jquery - Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>



