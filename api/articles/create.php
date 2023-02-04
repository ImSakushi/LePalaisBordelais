<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$libTitrArt = $_POST['libTitrArt'];
$libChapoArt = $_POST['libChapoArt'];
$libAccrochArt = $_POST['libAccrochArt'];
$parag1Art = $_POST['parag1Art'];
$libSsTitr1Art = $_POST['libSsTitr1Art'];
$parag2Art = $_POST['parag2Art'];
$libSsTitr2Art = $_POST['libSsTitr2Art'];
$parag3Art = $_POST['parag3Art'];
$libConclArt = $_POST['libConclArt'];
$urlPhotArt = $_POST['urlPhotArt'];
$numThem = $_POST['numThem'];

// sql_insert("ARTICLE", 'libTitrArt, libChapoArt, libAccrochArt, parag1Art, libSsTitr1Art, parag2Art, libSsTitr2Art, parag3Art, libConclArt, urlPhotArt, numThem', "'$libTitrArt', '$libChapoArt', '$libAccrochArt', '$parag1Art', '$libSsTitr1Art', '$parag2Art', '$libSsTitr2Art', '$parag3Art', '$libConclArt', '$urlPhotArt', '$numThem'");

echo $libTitrArt . "<br>";
echo $libChapoArt . "<br>";
echo $libAccrochArt . "<br>";
echo $parag1Art . "<br>";
echo $libSsTitr1Art . "<br>";
echo $parag2Art . "<br>";
echo $libSsTitr2Art . "<br>";
echo $parag3Art . "<br>";
echo $libConclArt . "<br>";
echo $urlPhotArt . "<br>";
echo $numThem . "<br>";
