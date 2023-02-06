<?php require_once 'header.php'; 
sql_connect();
$articles = sql_select("ARTICLE", "*", NULL, 'numArt DESC');
$dateSQL = $articles[0]['dtCreArt'];
list($date, $heure) = explode(" ", $dateSQL);
list($annee, $mois, $jour) = explode("-", $date);
$touslesmois = array("janvier", "février", "mars", "avril", "mai", "juin",
    "juillet", "août", "septembre", "octobre", "novembre", "décembre");
$datearticle = $jour . " " . $touslesmois[$mois - 1] . " " . $annee;

// print_r(curl("https://reqres.in/api/users", "POST", '{"name": "morpheus", "job": "leader"}'));
?>
<div class="article-dispo">
        <div class="article1">
            <div class="card border-0" style="width: 29rem;">
                <div class="card-body">
                    <p class="card-date"><?php 
                    list($date, $heure) = explode(" ", $articles[0]['dtCreArt']);
                    list($annee, $mois, $jour) = explode("-", $date);
                    echo $jour . " " . $touslesmois[$mois - 1] . " " . $annee;
                    ?></p>
                    <h5 class="card-title"><?php echo $articles[0]['libTitrArt'];?></h5>
                    <img src="source/images/articles/<?php echo $articles[0]['urlPhotArt'];?>" class="img-article" alt="Festival de Bordeaux S.O GOOD" style="width: 486.61px; height: 425.89px; object-fit: cover; object-position: 50% 0;">
                    <p class="card-text"><?php echo $articles[0]['libAccrochArt'];?></p>
                    <a href="#" class="card-link">lire la suite</a>
                </div>
            </div>
            <div class="container-fluid">
                <p><br></p>
                <button type="button" class="btn btn-outline-dark" style="width:100%">Voir plus d'articles</button>
            </div>
        </div>
        <div class="article-dispo2">
            <div class="article2">
                <div class="card border-0" style="width: 28rem;">
                    <div class="card-body">
                        <p class="card-date"><?php
                        list($date, $heure) = explode(" ", $articles[1]['dtCreArt']);
                        list($annee, $mois, $jour) = explode("-", $date);
                        echo $jour . " " . $touslesmois[$mois - 1] . " " . $annee;
                        ?></p>
                        <h5 class="card-title"><?php echo $articles[1]['libTitrArt'];?></h5>
                        <img src="source/images/articles/<?php echo $articles[1]['urlPhotArt'];?>" class="img-article" alt="Festival de Bordeaux S.O GOOD" style="width: 384.02px; height: 215.22px; object-fit: cover; object-position: 50% 0;">
                        <p class="card-text"><?php echo $articles[1]['libAccrochArt'];?></p>
                        <a href="#" class="card-link">lire la suite</a>
                    </div>
                </div>
            </div>
            <div class="article3">
                <div class="card border-0" style="width: 28rem;">
                    <div class="card-body">
                        <p class="card-date"><?php
                        list($date, $heure) = explode(" ", $articles[2]['dtCreArt']);
                        list($annee, $mois, $jour) = explode("-", $date);
                        echo $jour . " " . $touslesmois[$mois - 1] . " " . $annee;                        
                        ?></p>
                        <h5 class="card-title"><?php echo $articles[2]['libTitrArt'];?></h5>
                        <img src="source/images/articles/<?php echo $articles[2]['urlPhotArt'];?>" class="img-article" alt="Festival de Bordeaux S.O GOOD" style="width: 384.02px; height: 215.22px; object-fit: cover; object-position: 50% 0;">
                        <p class="card-text"><?php echo $articles[2]['libAccrochArt'];?></p>
                        <a href="#" class="card-link">lire la suite</a>
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

