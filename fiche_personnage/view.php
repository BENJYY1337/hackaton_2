<?php

require ('../models/HeroManager.php');
require ('../models/Hero.php');

$nom = htmlspecialchars($_POST['personnage']);

    $a = new heroManager;
    $hero = $a->read($nom);

if ($nom !== $hero['nom_heros']) {
    header('location:../index.php?erreur=le%20personnage%20n\'existe%20pas');
}


$b = new hero;
$donnees = $b-> hydrate($hero);

$vieMax= $b->get_vie_heros();
$force = $b->get_force_heros();
$nomHero = $b->get_nom_heros();


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
    <h2><?php echo $nomHero;?></h2>

<div class="hero">

</div>

<img src="public/img/guerrier.png" alt="image du guerrier">
<img src="public/img/guerriere.png" alt="image de la guerriere">


<!-- Optional JS - Jquery - Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

