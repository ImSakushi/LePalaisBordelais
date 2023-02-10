<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
include 'header.php';

$numArt = $_GET['numArt'];
$articles = sql_select("ARTICLE", "*", NULL, 'numArt DESC');
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

$touslesmois = array(
    "janvier", "février", "mars", "avril", "mai", "juin",
    "juillet", "août", "septembre", "octobre", "novembre", "décembre"
);

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
        <p><br><br></p>
        <div class="text-center">
            <h1 class="fw-bolder"><?php echo $titre ?></h1>
        </div>
        <p><br></p>
        <div class="text-center">
            <h2><?php echo $chapo ?></h2>
        </div>
        <div class="text-center"><img class="img-article" src="/source/images/articles/<?php echo $image ?>" alt="image article"></div>
        <p><br></p>
        <div class="text-left">
            <h3><?php echo $accroche ?></h3>
        </div>
        <div class="text-left fs-5 paragraphe-text">
            <p><?php echo $paragraphe1 ?></p>
        </div>
        <div class="text-left text-uppercase fw-bolder">
            <p><?php echo $stitre1 ?></p>
        </div>
        <div class="text-left fs-5 paragraphe-text">
            <p><?php echo $paragraphe2 ?></p>
        </div>
        <div class="text-left text-uppercase fw-bolder">
            <p><?php echo $stitre2 ?></p>
        </div>
        <div class="text-left fs-5 paragraphe-text">
            <p><?php echo $paragraphe3 ?></p>
        </div>
        <div class="text-left fs-5 paragraphe-text">
            <p><?php echo $conclusion ?></p>
        </div>
    </div>

<div class="container py-5">
    <div class="row">
        <div class="card">
            <h2>Donnez votre avis</h2>
        </div>


        <div class="container text-start">
    <div class="row">
    <div class="form-group">
                    <textarea id="libCom" class="form-control" rows="2"  maxlength="250" cols="10" required placeholder="Laissez un commentaire (250 caractères max)" type="text" name="libCom"></textarea>
                </div>
                <div class="d-flex justify-content-end pt-3">
                <div class="d-grid gap-2 col-3">
                    <button" class="btn btn-dark" type="button">Envoyer</button>
                    </div>
                </div>
    </div>
</div>

    </div>
    <div class="row pt-3">
        <div class="col pt-3">            
            <div class="d-flex flex-start">
            <img class="rounded-circle me-3" src="source/images/po.jpg" alt="profil" width="65" height="65">

            <div class="container">
            <p class="nomutilisateur" >@C'est_lanniv_de_joséphine</p> 
            <p class="datecommentaire">09-02-2023</p>
            <p class="mb-0">Joséphine Joséphine Joséphine</p>
        </div>
            </div>
            <div class="d-flex flex-start mt-5">
            <img class="rounded-circle me-3" src="source/images/po.jpg" alt="profil" width="65" height="65">

            <div class="container">
            <p class="nomutilisateur" >@Joyeux_anniversaire_joséphine</p> 
            <p class="datecommentaire">09-02-2023</p>
            <p class="mb-0">Joséphine Joséphine Joséphine</p>
        </div>
            </div>
    </div>
</div>



    <div class="container mt-5">
        <h2>D'autres articles</h2>

        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-6">
                    <a href="article.php?numArt=<?php echo $articles[0]['numArt']; ?>">
                        <img src="source/images/articles/<?php echo $articles[0]['urlPhotArt']; ?>" class="img-fluid img-article" style="width: 547px; height: 300px; object-fit: cover; object-position: 50% 0;" alt="image article">
                    </a>
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $articles[0]['libTitrArt']; ?></h5>
                        <p class="card-date"><?php
                                                list($date, $heure) = explode(" ", $articles[0]['dtCreArt']);
                                                list($annee, $mois, $jour) = explode("-", $date);
                                                echo $jour . " " . $touslesmois[$mois - 1] . " " . $annee;
                                                ?></p>
                        <a href="article.php?numArt=<?php echo $articles[0]['numArt']; ?>" class="card-text"><?php echo $articles[0]['libAccrochArt']; ?></a>

                    </div>
                </div>
            </div>
        </div>
        <p><br></p>

        <div class="row">
        <div class="col-md-3">
            <div class="text-center"><img class="img-article" src="/source/images/articles/<?php echo $image ?>" alt="image article"></div>
        </div>
        <div class="col-md-3">
                <h4>Titre Article</h4>
                <p class="card-date"><?php
                                                list($date, $heure) = explode(" ", $articles[0]['dtCreArt']);
                                                list($annee, $mois, $jour) = explode("-", $date);
                                                echo $jour . " " . $touslesmois[$mois - 1] . " " . $annee;
                                                ?></p>
                <p>chapeau.</p>
        </div>
        <div class="col-md-3">
                <div class="text-center"><img class="img-article" src="/source/images/articles/<?php echo $image ?>" alt="image article"></div>
        </div>
        <div class="col-md-3">
                <h4>Titre Article</h4>
                <p class="card-date"><?php
                                                list($date, $heure) = explode(" ", $articles[0]['dtCreArt']);
                                                list($annee, $mois, $jour) = explode("-", $date);
                                                echo $jour . " " . $touslesmois[$mois - 1] . " " . $annee;
                                                ?></p>
                <p>chapeau.</p>
        </div>
    </div>
</div>

    </div>

    </div>

</body>
<p><br><br></p>

</html>

<style>


    .nomutilisateur {
        font-weight: bold;
        font-size: large;
        margin-bottom: 1px;
}

    .datecommentaire {
        margin-left: 15px;
        font-size: smaller;

    }
    h2 {
        padding-top: 30px;
        padding-bottom: 30px;
    }

    .img-article1 {
        width: 400px;
        height: 250px;
        border-radius: 15px;
    }

</style>

<?php require_once 'footer.php'; ?>