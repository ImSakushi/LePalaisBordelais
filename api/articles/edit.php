<?php

require_once __DIR__ . '/../../config.php';


$numArt = $_POST['numArt'];
$libTitrArt = '"' . sql_escape($_POST['libTitrArt']) . '"';
$libChapoArt = '"' . sql_escape($_POST['libChapoArt']) . '"';
$libAccrochArt = '"' . sql_escape($_POST['libAccrochArt']) . '"';
$parag1Art = '"' . sql_escape($_POST['parag1Art']) . '"';
$libSsTitr1Art = '"' . sql_escape($_POST['libSsTitr1Art']) . '"';
$parag2Art = '"' . sql_escape($_POST['parag2Art']) . '"';
$libSsTitr2Art = '"' . sql_escape($_POST['libSsTitr2Art']) . '"';
$parag3Art = '"' . sql_escape($_POST['parag3Art']) . '"';
$libConclArt = '"' . sql_escape($_POST['libConclArt']) . '"';
$urlPhotArt = $_FILES['urlPhotArt']['name'];
$dtCreArt = '"' . $_POST['dtCreArt'] . '"';
$numThem = $_POST['numThem'];

if (!file_exists($_FILES['urlPhotArt']['tmp_name']) || !is_uploaded_file($_FILES['urlPhotArt']['tmp_name'])) 
{
    // pas d'upload
}
else
{
    move_uploaded_file($_FILES['urlPhotArt']['tmp_name'], __DIR__ . '/../../source/images/articles/' . $_FILES['urlPhotArt']['name']);
    sql_update('ARTICLE', "urlPhotArt = '$urlPhotArt'", "numArt = $numArt");
}


sql_update('ARTICLE', "libTitrArt = $libTitrArt, libChapoArt = $libChapoArt, libAccrochArt = $libAccrochArt, parag1Art = $parag1Art, libSsTitr1Art = $libSsTitr1Art, parag2Art = $parag2Art, libSsTitr2Art = $libSsTitr2Art, parag3Art = $parag3Art, libConclArt = $libConclArt, dtCreArt = $dtCreArt, numThem = $numThem", "numArt = $numArt");

// sql_update('ARTICLE', "libTitrArt = $libTitrArt", "numArt = $numArt");
// sql_update('ARTICLE', "libChapoArt = $libChapoArt", "numArt = $numArt");
// sql_update('ARTICLE', "libAccrochArt = $libAccrochArt", "numArt = $numArt");
// sql_update('ARTICLE', "parag1Art = $parag1Art", "numArt = $numArt");
// sql_update('ARTICLE', "libSsTitr1Art = $libSsTitr1Art", "numArt = $numArt");
// sql_update('ARTICLE', "parag2Art = $parag2Art", "numArt = $numArt");
// sql_update('ARTICLE', "libSsTitr2Art = $libSsTitr2Art", "numArt = $numArt");
// sql_update('ARTICLE', "parag3Art = $parag3Art", "numArt = $numArt");
// sql_update('ARTICLE', "libConclArt = $libConclArt", "numArt = $numArt");
// sql_update('ARTICLE', "dtCreArt = $dtCreArt", "numArt = $numArt");
// sql_update('ARTICLE', "numThem = $numThem", "numArt = $numArt");
sql_delete('MOTCLEARTICLE', "numArt = $numArt");
if(isset($_POST['keywords']))
{
   foreach($_POST['keywords'] as $keyword)
   {
    sql_insert("MOTCLEARTICLE", "numMotCle, numArt", "$keyword, $numArt");
   }
}
header('Location: ../../views/backend/articles/list.php');