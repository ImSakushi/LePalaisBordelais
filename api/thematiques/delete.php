<?php

require_once __DIR__ . '/../../config.php';

$numThem = $_POST['numThem'];
sql_delete('THEMATIQUE', "numThem = $numThem");

header('Location: ../../views/backend/thematiques/list.php');