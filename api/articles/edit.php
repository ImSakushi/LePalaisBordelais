<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';


$numArt = $_POST['numArt'];
$libTitrArt = '"' . addslashes($_POST['libTitrArt']) . '"';
$libChapoArt = '"' . addslashes($_POST['libChapoArt']) . '"';
$libAccrochArt = '"' . addslashes($_POST['libAccrochArt']) . '"';
$parag1Art = '"' . addslashes($_POST['parag1Art']) . '"';
$libSsTitr1Art = '"' . addslashes($_POST['libSsTitr1Art']) . '"';
$parag2Art = '"' . addslashes($_POST['parag2Art']) . '"';
$libSsTitr2Art = '"' . addslashes($_POST['libSsTitr2Art']) . '"';
$parag3Art = '"' . addslashes($_POST['parag3Art']) . '"';
$libConclArt = '"' . addslashes($_POST['libConclArt']) . '"';
$urlPhotArt = $_FILES['urlPhotArt']['name'];
$dtCreArt = '"' . $_POST['dtCreArt'] . '"';
$numThem = $_POST['numThem'];

if (!file_exists($_FILES['urlPhotArt']['tmp_name']) || !is_uploaded_file($_FILES['urlPhotArt']['tmp_name'])) 
{
    // pas d'upload
}
else
{
    move_uploaded_file($_FILES['urlPhotArt']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/source/images/articles/' . $_FILES['urlPhotArt']['name']);
    sql_update('ARTICLE', "urlPhotArt = '$urlPhotArt'", "numArt = $numArt");
}




sql_update('ARTICLE', "libTitrArt = $libTitrArt", "numArt = $numArt");
sql_update('ARTICLE', "libChapoArt = $libChapoArt", "numArt = $numArt");
sql_update('ARTICLE', "libAccrochArt = $libAccrochArt", "numArt = $numArt");
sql_update('ARTICLE', "parag1Art = $parag1Art", "numArt = $numArt");
sql_update('ARTICLE', "libSsTitr1Art = $libSsTitr1Art", "numArt = $numArt");
sql_update('ARTICLE', "parag2Art = $parag2Art", "numArt = $numArt");
sql_update('ARTICLE', "libSsTitr2Art = $libSsTitr2Art", "numArt = $numArt");
sql_update('ARTICLE', "parag3Art = $parag3Art", "numArt = $numArt");
sql_update('ARTICLE', "libConclArt = $libConclArt", "numArt = $numArt");
sql_update('ARTICLE', "dtCreArt = $dtCreArt", "numArt = $numArt");
sql_update('ARTICLE', "numThem = $numThem", "numArt = $numArt");
header('Location: ../../views/backend/articles/list.php');