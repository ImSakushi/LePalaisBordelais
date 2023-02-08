<?php require_once 'header.php';
sql_connect();

$articles = sql_select("ARTICLE", "*", NULL, 'numArt DESC');
$dateSQL = $articles[0]['dtCreArt'];
list($date, $heure) = explode(" ", $dateSQL);
list($annee, $mois, $jour) = explode("-", $date);
$touslesmois = array(
    "janvier", "février", "mars", "avril", "mai", "juin",
    "juillet", "août", "septembre", "octobre", "novembre", "décembre"
);
$datearticle = $jour . " " . $touslesmois[$mois - 1] . " " . $annee;

// print_r(curl("https://reqres.in/api/users", "POST", '{"name": "morpheus", "job": "leader"}'));
?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card border-0" style="width: 29rem;">
                <div class="card-body">
                    <?php
                    // if ($_SESSION['username'] !== "") {
                    // $user = $_SESSION['username'];
                    //     // afficher un message
                    //     echo "Bonjour $user, vous êtes connecté";
                    // }
                    ?>

        <div class= haut >

                    <p class="card-date"><?php
                                            list($date, $heure) = explode(" ", $articles[0]['dtCreArt']);
                                            list($annee, $mois, $jour) = explode("-", $date);
                                            echo $jour . " " . $touslesmois[$mois - 1] . " " . $annee;
                                            ?></p>
                    <h5 class="card-title"><?php echo $articles[0]['libTitrArt']; ?></h5>
                    <img src="source/images/articles/<?php echo $articles[0]['urlPhotArt']; ?>" class="img-article-une" alt="Festival de Bordeaux S.O GOOD" style="object-fit: cover; object-position: 50% 0; border-radius: 25px 25px 25px 25px; width:450px;height:400px">
                    <p class="card-text"><?php echo $articles[0]['libAccrochArt']; ?></p>
                    <a href="#" class="card-link">lire la suite</a>
                </div>   
            </div>
                
            <p><br></p>
            <div class = voirplus>
            <div class="d-grid gap-2">
                        <button class="btn btn-outline-dark" type="button">Voir plus d'articles</button>
            </div>
            </div>

        </div>

        </div>
    
        <div class="col">
            <div class="card border-0" style="width: 28rem;">
                <div class="card-body">

                <div class= haut >
                    <p class="card-date"><?php
                                            list($date, $heure) = explode(" ", $articles[1]['dtCreArt']);
                                            list($annee, $mois, $jour) = explode("-", $date);
                                            echo $jour . " " . $touslesmois[$mois - 1] . " " . $annee;
                                            ?></p>
                    <h5 class="card-title"><?php echo $articles[1]['libTitrArt']; ?></h5>
                    <img src="source/images/articles/<?php echo $articles[1]['urlPhotArt']; ?>" class="img-article" alt="Festival de Bordeaux S.O GOOD" style="width: 384.02px; height: 215.22px; object-fit: cover; object-position: 50% 0;">
                    <p class="card-text"><?php echo $articles[1]['libAccrochArt']; ?></p>
                    <a href="#" class="card-link">lire la suite</a>
                </div>
            </div>
            <div class="card border-0" style="width: 28rem;">
                <div class="card-body">
                    <p class="card-date"><?php
                                            list($date, $heure) = explode(" ", $articles[2]['dtCreArt']);
                                            list($annee, $mois, $jour) = explode("-", $date);
                                            echo $jour . " " . $touslesmois[$mois - 1] . " " . $annee;
                                            ?></p>
                    <h5 class="card-title"><?php echo $articles[2]['libTitrArt']; ?></h5>
                    <img src="source/images/articles/<?php echo $articles[2]['urlPhotArt']; ?>" class="img-article" alt="Festival de Bordeaux S.O GOOD" style="width: 384.02px; height: 215.22px; object-fit: cover; object-position: 50% 0;">
                    <p class="card-text"><?php echo $articles[2]['libAccrochArt']; ?></p>
                    <a href="#" class="card-link">lire la suite</a>
                </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'footer.php'; ?>

<script>
    const cards = document.querySelectorAll('.card.border-0');
    cards[0].addEventListener('click', function(e) {
        window.location.href = 'article.php?numArt=<?php echo $articles[0]['numArt']; ?>';
    });

    cards[1].addEventListener('click', function(e) {
        window.location.href = 'article.php?numArt=<?php echo $articles[1]['numArt']; ?>';
    });

    cards[2].addEventListener('click', function(e) {
        window.location.href = 'article.php?numArt=<?php echo $articles[2]['numArt']; ?>';
    });
</script>

<style>

.voirplus{
    width:95%;
    
    padding-left : 20px;
}

.haut {
    padding-top:60px;
}
.haut2 {
    padding-top:50px;
    
}

</style>