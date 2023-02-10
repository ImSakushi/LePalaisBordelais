<?php

require_once __DIR__ . '/../../config.php';

$numMemb = sql_escape($_POST["numMemb"]);
$numArt = sql_escape($_POST['numArt']);
$likeA = 1;
sql_insert('LIKEART', 'numMemb, numArt, likeA', "'$numMemb', '$numArt', '$likeA'");


header('Location: ../../article.php?numArt=' . $numArt);