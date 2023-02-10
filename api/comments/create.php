<?php

require_once __DIR__ . '/../../config.php';
session_start();
$numMemb = sql_escape($_POST["numMemb"]);
$numArt = sql_escape($_POST['numArt']);
$libCom = sql_escape($_POST['libCom']);
sql_insert('COMMENT', 'libCom, numArt, numMemb', "'$libCom', '$numArt', '$numMemb'");

if(isset($_SESSION['username'])) {
    header('Location: ../../article.php?numArt=' . $numArt);
} else {
    header('Location: ../../views/backend/login.php');
}