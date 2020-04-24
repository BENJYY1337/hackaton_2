<?php

require('../models/FamilierManager.php');
require('../models/Familier.php');

$a = new FamilierManager;
$familier = $a->readAll();

// count pour savoir le nbre de familier
// foreach pour passer les tableaux


$b = new Familier;
$familier1 = $b->hydrate($familier['0']);
$nom1 = $b->get_nom_familier();
$vieMax1 = $b->get_vie_max_familier();
$vie1 = $b->get_vie_familier();
$force1 = $b->get_force_familier();
$niveau1 = $b -> get_niveau_familier();

$pf = $vie1 / $vieMax1 * 100;
?>




<div class="familier">
    <audio src="../public/mp3/1796.wav" autoplay="TRUE"></audio>
            <img id="imgfamilier" src="../public/img/familier1.png" alt="image de Drakakko" width="150px">
    <h2><?php echo $nom1 ?></h2>
    <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: <?php echo $pf . "%"; ?>" aria-valuenow="<?php echo $vie1; ?>" aria-valuemin="0" aria-valuemax="<?php echo $vieMax1; ?>"></div>
        <?php echo $vie1. '/'. $vieMax1 ?>
    </div>
    <div>Force :<?php echo $force1 ?></div>
    <div>Niveau :<?php echo $niveau1 ?></div>
</div>