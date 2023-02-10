<?php

require_once __DIR__ . '/config.php';
include 'header.php';


$numArt = $_GET['numArt'];
$articles = sql_select("ARTICLE", "*", NULL, 'numArt DESC');
$articledata = sql_select('ARTICLE', '*', "numArt = $numArt");


$id_memb = $_SESSION["id_memb"];
$comments = sql_select('COMMENT', '*', "numArt = $numArt");
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
$keywords = sql_select("MOTCLE", "*");
$keywordselected = sql_select("MOTCLEARTICLE", "numMotCle", "numArt = $numArt");
$array_keywords = array();
foreach($keywordselected as $keyword){
    $array_keywords[] = $keyword['numMotCle'];
}

$likes = sql_select('LIKEART', '*', "numArt = $numArt");
if(isset($_SESSION['username'])) {
    $islike = sql_select('LIKEART', 'likeA', "numMemb = $id_memb AND numArt = $numArt");
}


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
        <div class="text-left">
            
                
            <p><strong>Mot-clés:</strong> <?php
                foreach ($keywords as $keyword => $value) : ?>
                <?php if (in_array($value['numMotCle'], $array_keywords)) {
                echo $value['libMotCle'] . ',';
                }?>
                <?php endforeach; ?> </p>
            
        </div>
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
        <p><br></p>
        <form action="<?php echo ROOT_URL . '/api/likes/create.php' ?>" method="post">
        <input type="hidden" name="numMemb" value="<?php echo $id_memb ?>">
        <input type="hidden" name="numArt" value="<?php echo $numArt ?>">
        <div class="likeflex" style="display:flex; align-items:center;">
            <button class="like" type="submit"><img src=<?php
            if ($islike[0][0] == 0) {
                echo '"/source/images/like.svg"';
            } else {
                echo '"/source/images/unlike.svg"';
            }?>></button>
            <p class="fs-5 margino"><?php
            $nombrelike = sql_select('LIKEART', "Count(likeA)", "numArt = $numArt")[0][0];
            echo "    " . $nombrelike?></p>
        </div>
        </form>
    </div>
    

    <div class="container py-5">
        <div class="row">
            <div class="card">
                <h2>Donnez votre avis</h2>
            </div>
            <div class="container text-start">
                <div class="row">
                    <div class="form-group">
                        <form action="<?php echo ROOT_URL . '/api/comments/create.php' ?>" method="post">
                            <input type="hidden" name="numMemb" value="<?php echo $id_memb ?>">
                            <input type="hidden" name="numArt" value="<?php echo $numArt ?>">
                            <textarea id="libCom" class="form-control" rows="2" maxlength="250" cols="10" required placeholder="Laissez un commentaire (250 caractères max)" type="text" name="libCom"></textarea>
                            <div class="d-flex justify-content-end pt-3">
                                <div class="d-grid gap-2 col-3">
                                    <button class="btn btn-dark" type="submit">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <div class="row pt-3">
            <div class="col pt-3">
                <?php foreach ($comments as $comment => $value) : ?>
                <div class="d-flex flex-start mt-5">
                    <img class="rounded-circle me-3" src="source/images/profil.jpg" alt="profil" width="65" height="65">

                    <div class="container">
                        <p class="nomutilisateur">@<?php
                        $usernamenumber = $comments[$comment]['numMemb'];
                        $usernamecomment = sql_select('MEMBRE', 'pseudomemb', "numMemb = $usernamenumber");
                        echo $usernamecomment[0][0];?></p>
                        <p class="datecommentaire"><?php
                                            list($date, $heure) = explode(" ", $comments[$comment]['dtCreCom']);
                                            list($annee, $mois, $jour) = explode("-", $date);
                                            echo $jour . " " . $touslesmois[$mois - 1] . " " . $annee;
                                            ?></p>
                        <p class="mb-0"><?php echo $comments[$comment]['libCom'];?></p>
                    </div>
                </div>
                <?php endforeach; ?>


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
                            <a href="article.php?numArt=<?php echo $articles[0]['numArt']; ?>" class="click">
                                <h5 class="card-title"><?php echo $articles[0]['libTitrArt']; ?></h5>
                            </a>
                            <p class="card-date"><?php
                                                    list($date, $heure) = explode(" ", $articles[0]['dtCreArt']);
                                                    list($annee, $mois, $jour) = explode("-", $date);
                                                    echo $jour . " " . $touslesmois[$mois - 1] . " " . $annee;
                                                    ?></p>
                            <a href="article.php?numArt=<?php echo $articles[0]['numArt']; ?>" class="card-text click"><?php echo $articles[0]['libAccrochArt']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <p><br></p>

            <div class="row">
                <div class="col-md-3">
                    <div class="text-center"><img class="img-article" src="source/images/articles/<?php echo $articles[1]['urlPhotArt']; ?>" alt="image article"></div>
                </div>
                <div class="col-md-3">
                    <a href="article.php?numArt=<?php echo $articles[1]['numArt']; ?>" class="click">
                        <h4><?php echo $articles[1]['libTitrArt']; ?></h4>
                    </a>
                    <p class="card-date"><?php
                                            list($date, $heure) = explode(" ", $articles[1]['dtCreArt']);
                                            list($annee, $mois, $jour) = explode("-", $date);
                                            echo $jour . " " . $touslesmois[$mois - 1] . " " . $annee;
                                            ?></p>
                    <a href="article.php?numArt=<?php echo $articles[1]['numArt']; ?>" class="card-text click"><?php echo $articles[1]['libAccrochArt']; ?></a>
                </div>
                <div class="col-md-3">
                    <div class="text-center"><img class="img-article" src="source/images/articles/<?php echo $articles[2]['urlPhotArt']; ?>" alt="image article"></div>
                </div>
                <div class="col-md-3">
                    <a href="article.php?numArt=<?php echo $articles[2]['numArt']; ?>" class="click">
                        <h4><?php echo $articles[2]['libTitrArt']; ?></h4>
                    </a>
                    <p class="card-date"><?php
                                            list($date, $heure) = explode(" ", $articles[2]['dtCreArt']);
                                            list($annee, $mois, $jour) = explode("-", $date);
                                            echo $jour . " " . $touslesmois[$mois - 1] . " " . $annee;
                                            ?></p>
                    <a href="article.php?numArt=<?php echo $articles[2]['numArt']; ?>" class="card-text click"><?php echo $articles[2]['libAccrochArt']; ?></a>
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

    .click {
        color: black;
        text-decoration: none;
    }

    .click:hover {
        color: black;
        text-decoration: underline;
    }

.likeflex {
    display: flex;
    align-content: space-around;
}

.margino {
    margin-bottom : 0rem;
    color: grey;
}
</style>

<?php require_once 'footer.php'; ?>