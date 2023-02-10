<?php

require_once __DIR__ . '/../../config.php';

$numMemb = sql_escape($_POST["numMemb"]);
$numArt = sql_escape($_POST['numArt']);
$libCom = sql_escape($_POST['libCom']);
sql_insert('COMMENT', 'libCom, numArt, numMemb', "'$libCom', '$numArt', '$numMemb'");


header('Location: ../../article.php?numArt=' . $numArt);