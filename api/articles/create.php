<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

// echo $_SERVER['DOCUMENT_ROOT'] . '/source/images/' . $_POST['urlPhotArt']['name'];
if(isset($_FILES['urlPhotArt'])){
    move_uploaded_file($_FILES['urlPhotArt']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/source/images/articles/' . $_FILES['urlPhotArt']['name']);
  }

$libTitrArt = '"' . sql_escape($_POST['libTitrArt']) . '"';
$libChapoArt = '"' . sql_escape($_POST['libChapoArt']) . '"';
$libAccrochArt = '"' . sql_escape($_POST['libAccrochArt']) . '"';
$parag1Art = '"' . sql_escape($_POST['parag1Art']) . '"';
$libSsTitr1Art = '"' . sql_escape($_POST['libSsTitr1Art']) . '"';
$parag2Art = '"' . sql_escape($_POST['parag2Art']) . '"';
$libSsTitr2Art = '"' . sql_escape($_POST['libSsTitr2Art']) . '"';
$parag3Art = '"' . sql_escape($_POST['parag3Art']) . '"';
$libConclArt = '"' . sql_escape($_POST['libConclArt']) . '"';
$urlPhotArt = '"' . $_FILES['urlPhotArt']['name'] . '"';
$numThem = sql_escape($_POST['numThem']);








sql_insert("ARTICLE", "libTitrArt, libChapoArt, libAccrochArt, parag1Art, libSsTitr1Art, parag2Art, libSsTitr2Art, parag3Art, libConclArt, urlPhotArt, numThem", "$libTitrArt, $libChapoArt, $libAccrochArt, $parag1Art, $libSsTitr1Art, $parag2Art, $libSsTitr2Art, $parag3Art, $libConclArt, $urlPhotArt, $numThem");

if(isset($_POST['keywords']))
{
   foreach($_POST['keywords'] as $keyword)
   {
      $numArt = sql_select("ARTICLE", "numArt", "parag1Art = $parag1Art")[0]['numArt'];
      sql_insert("MOTCLEARTICLE", "numMotCle, numArt", "$keyword, $numArt");
   }
}

header('Location: ../../views/backend/articles/list.php');