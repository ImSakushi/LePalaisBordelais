<?php

require_once __DIR__ . '/../../config.php';


$numMemb = $_POST['numMemb'];
$prenomMemb = '"' . sql_escape($_POST['prenomMemb']) . '"';
$nomMemb = '"' . sql_escape($_POST['nomMemb']) . '"';
$pseudoMemb = '"' . sql_escape($_POST['pseudoMemb']) . '"';
$passMemb = sql_escape($_POST['passMemb']);
$eMailMemb = '"' . sql_escape($_POST['eMailMemb']) . '"';
$dtCreaMemb = '"' . $_POST['dtCreaMemb'] . '"';
$numStat = $_POST['numStat'];
$passwordHash = sql_escape(password_hash($passMemb, PASSWORD_DEFAULT));


sql_update('MEMBRE', "numMemb = $numMemb", "numMemb = $numMemb");
sql_update('MEMBRE', "prenomMemb = $prenomMemb", "numMemb = $numMemb");
sql_update('MEMBRE', "nomMemb = $nomMemb", "numMemb = $numMemb");
sql_update('MEMBRE', "pseudoMemb = $pseudoMemb", "numMemb = $numMemb");
sql_update('MEMBRE', "passMemb = '$passwordHash'", "numMemb = $numMemb");
sql_update('MEMBRE', "eMailMemb = $eMailMemb", "numMemb = $numMemb");
sql_update('MEMBRE', "numStat = $numStat", "numMemb = $numMemb");
sql_update('MEMBRE', "dtCreaMemb = $dtCreaMemb", "numMemb = $numMemb");
header('Location: ../../views/backend/members/list.php');