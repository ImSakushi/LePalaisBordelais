<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$numStat = $_POST['numStat'];
sql_delete('STATUT', "numStat = $numStat");

header('Location: ../../views/backend/status/list.php');