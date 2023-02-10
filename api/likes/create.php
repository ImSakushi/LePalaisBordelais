<?php

require_once __DIR__ . '/../../config.php';
session_start();
$numMemb = sql_escape($_POST["numMemb"]);
$numArt = sql_escape($_POST['numArt']);
$islike = sql_select('LIKEART', 'likeA', "numMemb = $numMemb AND numArt = $numArt");


if ($islike[0][0] == 1) {
    sql_delete('LIKEART', "numArt = $numArt AND numMemb = $numMemb");
} else {
    $likeA = 1;
    sql_insert('LIKEART', 'numMemb, numArt, likeA', "'$numMemb', '$numArt', '$likeA'");
}


if(isset($_SESSION['username'])) {
    header('Location: ../../article.php?numArt=' . $numArt);
} else {
    header('Location: ../../views/backend/login.php');
}