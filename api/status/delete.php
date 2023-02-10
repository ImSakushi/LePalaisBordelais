<?php

require_once __DIR__ . '/../../config.php';

$numStat = $_POST['numStat'];
sql_delete('STATUT', "numStat = $numStat");

header('Location: ../../views/backend/status/list.php');