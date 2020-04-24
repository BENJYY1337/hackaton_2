<?php

require('../models/FamilierManager.php');
require('../models/Familier.php');

$a = new FamilierManager;
$familier = $a->readAll();

var_dump($familier['0']);
