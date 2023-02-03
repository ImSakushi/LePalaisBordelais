<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$libStat = $_POST['libStat'];

sql_insert('STATUT', 'libStat', "'$libStat'");

header('Location: ../../views/backend/status/list.php');