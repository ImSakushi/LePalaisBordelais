<?php

require_once __DIR__ . '/../../config.php';


$numMotCle = $_POST['numMotCle'];
$libMotCle = '"' . sql_escape($_POST['libMotCle']) . '"';


sql_update('MOTCLE', "libMotCle = $libMotCle", "numMotCle = $numMotCle");
header('Location: ../../views/backend/keywords/list.php');