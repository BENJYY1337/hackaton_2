<?php

require('../models/FamilierManager.php');
require('../models/Familier.php');

$a = new FamilierManager;
$familier = $a->readAll();

// count pour savoir le nbre de familier
// foreach pour passer les tableaux


$b = new Familier;
$familier1 = $b->hydrate($familier['0']);
$vie1 = $b->get_vie_familier();
$nom1 = $b->get_nom_familier();
$force1 = $b->get_force_familier();


echo $familier1 . $vie1 . $nom1 . $force1;



$familier2 = $b->hydrate($familier['1']);
$familier3 = $b->hydrate($familier['2']);
$familier4 = $b->hydrate($familier['3']);
$familier5 = $b->hydrate($familier['4']);
