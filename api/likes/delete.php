<?php

require_once __DIR__ . '/../../config.php';

$numMemb = $_POST['numMemb'];
$numArt = $_POST['numArt'];
echo $numArt . "<br>";
echo $numMemb;
//sql_delete('THEMATIQUE', "numThem = $numThem");

header('Location: ../../index.php');