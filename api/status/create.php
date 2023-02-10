<?php

require_once __DIR__ . '/../../config.php';

$libStat = $_POST['libStat'];

sql_insert('STATUT', 'libStat', "'$libStat'");

header('Location: ../../views/backend/status/list.php');