<?php

require ('models/HeroManager.php');
require ('models/Hero.php');

$nom = htmlspecialchars($_POST['personnage']);


$a = new heroManager;
$hero = $a->read($nom);


print_r($hero);

echo $hero['vie_heros'];


$b = new hero;
$donnees = $b-> hydrate($hero);

$vieMax= $b->get_vie_heros();
$force = $b->get_force_heros();

echo $vieMax;
echo $force;


