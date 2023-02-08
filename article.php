<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
include 'header.php';

$numArt = $_GET['numArt'];
$articledata = sql_select('ARTICLE', '*', "numArt = $numArt");


$titre = $articledata[0]['libTitrArt'];
$chapo = $articledata[0]['libChapoArt'];
$accroche = $articledata[0]['libAccrochArt'];
$paragraphe1 = $articledata[0]['parag1Art'];
$stitre1 = $articledata[0]['libSsTitr1Art'];
$paragraphe2 = $articledata[0]['parag2Art'];
$stitre2 = $articledata[0]['libSsTitr2Art'];
$paragraphe3 = $articledata[0]['parag3Art'];
$conclusion = $articledata[0]['libConclArt'];
$image = $articledata[0]['urlPhotArt'];
$theme = $articledata[0]['numThem'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titre ?></title>
</head>
<body>
    <div class="container">
        <p><br></p>
        <div class="text-center"><h1 class="fw-bolder" ><?php echo $titre ?></h1></div>
        <p><br></p>
        <div class="text-center"><h2><?php echo $chapo ?></h2></div>
        <div class="text-center"><img class="img-article" src="/source/images/articles/<?php echo $image ?>" alt="image article"></div>
        <p><br></p>
        <div class="text-left"><h3><?php echo $accroche ?></h3></div>
        <div class="text-left fs-5 paragraphe-text"><p><?php echo $paragraphe1 ?></p></div>
        <div class="text-left text-uppercase fw-bolder"><p><?php echo $stitre1 ?></p></div>
        <div class="text-left fs-5 paragraphe-text"><p><?php echo $paragraphe2 ?></p></div>
        <div class="text-left text-uppercase fw-bolder"><p><?php echo $stitre2 ?></p></div>
        <div class="text-left fs-5 paragraphe-text"><p><?php echo $paragraphe3 ?></p></div>
        <div class="text-left fs-5 paragraphe-text"><p><?php echo $conclusion ?></p></div>
    </div>


    <div class=container>
        <h2>D'autres articles</h2>

        <div class="row">
            <div class="col-6">
                <div class="text-center"><img class="img-article" src="/source/images/articles/<?php echo $image ?>" alt="image article"></div>
            </div>
            <div class="col-6">
                <h3>Titre Article</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
                    llamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <p><br></p>
            <div class="col-3">
                <div class="text-center"><img class="img-article" src="/source/images/articles/<?php echo $image ?>" alt="image article"></div>
            </div>
            <div class="col-3">
                <h4>Titre Article</h4>
                <p>chapeau.</p>
            </div>
            <div class="col-3">
                <div class="text-center"><img class="img-article" src="/source/images/articles/<?php echo $image ?>" alt="image article"></div>
            </div>
            <div class="col-3">
                <h4>Titre Article</h4>
                <p>chapeau.</p>
            </div>
            
            </div>

            
        </div>
        
    </div>
    
</body>
</html>

<style>
h2 {
    padding-top:30px;
    padding-bottom:30px;
}

.img-article1 {
    width:400px;
    height:250px;
    border-radius: 15px;
}
</style>