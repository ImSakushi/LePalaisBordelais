<?php

require_once __DIR__ . '/../../config.php';

$numMemb = $_POST['numMemb'];
sql_delete('MEMBRE', "numMemb = $numMemb");

header('Location: ../../views/backend/members/list.php');