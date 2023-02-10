<?php

require_once __DIR__ . '/../../config.php';

$numMotCle = $_POST['numMotCle'];
sql_delete('MOTCLE', "numMotCle = $numMotCle");

header('Location: ../../views/backend/keywords/list.php');