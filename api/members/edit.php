<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';


$numMemb = $_POST['numMemb'];
$prenomMemb = '"' . addslashes($_POST['prenomMemb']) . '"';
$nomMemb = '"' . addslashes($_POST['nomMemb']) . '"';
$pseudoMemb = '"' . addslashes($_POST['pseudoMemb']) . '"';
$passMemb = '"' . addslashes($_POST['passMemb']) . '"';
$eMailMemb = '"' . addslashes($_POST['eMailMemb']) . '"';
$dtCreaMemb = '"' . $_POST['dtCreaMemb'] . '"';
$numStat = $_POST['numStat'];


sql_update('MEMBRE', "numMemb = $numMemb", "numMemb = $numMemb");
sql_update('MEMBRE', "prenomMemb = $prenomMemb", "numMemb = $numMemb");
sql_update('MEMBRE', "nomMemb = $nomMemb", "numMemb = $numMemb");
sql_update('MEMBRE', "pseudoMemb = $pseudoMemb", "numMemb = $numMemb");
sql_update('MEMBRE', "passMemb = $passMemb", "numMemb = $numMemb");
sql_update('MEMBRE', "eMailMemb = $eMailMemb", "numMemb = $numMemb");
sql_update('MEMBRE', "numStat = $numStat", "numMemb = $numMemb");
sql_update('MEMBRE', "dtCreaMemb = $dtCreaMemb", "numMemb = $numMemb");
//header('Location: ../../views/backend/members/list.php');