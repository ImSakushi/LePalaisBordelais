<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$numMotCle = $_POST['numMotCle'];
sql_delete('MOTCLE', "numMotCle = $numMotCle");

header('Location: ../../views/backend/thematiques/list.php');