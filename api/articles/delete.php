<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$numArt = $_POST['numArt'];
echo $numArt;
sql_delete('MOTCLEARTICLE', "numArt = $numArt");
sql_delete('ARTICLE', "numArt = $numArt");

header('Location: ../../views/backend/articles/list.php');