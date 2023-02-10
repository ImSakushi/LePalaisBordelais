<?php

require_once __DIR__ . '/../../config.php';

$numArt = $_POST['numArt'];
echo $numArt;
sql_delete('COMMENT', "numArt = $numArt");
sql_delete('LIKEART', "numArt = $numArt");
sql_delete('MOTCLEARTICLE', "numArt = $numArt");
sql_delete('ARTICLE', "numArt = $numArt");

header('Location: ../../views/backend/articles/list.php');