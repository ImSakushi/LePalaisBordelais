<?php

require_once __DIR__ . '/../../config.php';


$numThem = $_POST['numThem'];
$libThem = '"' . sql_escape($_POST['libThem']) . '"';


sql_update('THEMATIQUE', "libThem = $libThem", "numThem = $numThem");
header('Location: ../../views/backend/thematiques/list.php');