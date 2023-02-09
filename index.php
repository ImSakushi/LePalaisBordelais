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
if(isset($_COOKIE['accept_cookies']) AND $_COOKIE['accept_cookies'] == 'true') {
    $showcookie = false;
} else {
    $showcookie = true;
}

// print_r(curl("https://reqres.in/api/users", "POST", '{"name": "morpheus", "job": "leader"}'));
?>
<?php if($showcookie) { ?>
<div class="cookie-card">
    <p class = "title">Cookies consentement</p> 
    <p class="info">Avec votre accord, nous utilisons des cookies
        pour stocker et accéder à des informations personnelles comme 
        votre visite sur ce site. Vous pouvez retirer votre consentement 
        ou vous opposer aux traitements basés sur l'intérêt légitime à tout 
        moment en cliquant sur "En savoir plus" ou dans notre politique de 
        confidentialité sur ce site. <a href="#"> En savoir plus</a></p>
        <button onclick="location.href='accept_cookies.php'" class ="cta"> Oui, j'accepte</button>
        <a class="lien-cookie" href="#">Paramètres Cookies</a>
</div>
<?php } ?>
<div class="container container-homepage">
    <div class="row">
        <div class="col">
            <div class="card border-0" style="width: 29rem;margin: auto;">
                <div class="card-body">
                    <?php
                    // if(isset($_SESSION['username'])) {
                    //     $user = $_SESSION['username'];
                    //         // afficher un message
                    //         echo "Bonjour $user, vous êtes connecté";
                    //     }
                    ?>

        <div class= haut >

                    <p class="card-date"><?php
                                            list($date, $heure) = explode(" ", $articles[0]['dtCreArt']);
                                            list($annee, $mois, $jour) = explode("-", $date);
                                            echo $jour . " " . $touslesmois[$mois - 1] . " " . $annee;
                                            ?></p>
                    <h5 class="card-title"><?php echo $articles[0]['libTitrArt']; ?></h5>
                    <img src="source/images/articles/<?php echo $articles[0]['urlPhotArt']; ?>" class="img-article-une" alt="image article à la une" style="object-fit: cover; object-position: 50% 0; border-radius: 25px 25px 25px 25px; width:450px;height:400px">
                    <p class="card-text"><?php echo $articles[0]['libAccrochArt']; ?></p>
                    <a href="#" class="card-link">lire la suite</a>
                </div>   
            </div>
                
            <p><br></p>
            <div class = voirplus>
            <div class="d-grid gap-2">
                        <button onclick="location.href='/archives.php'" class="btn btn-outline-dark" type="button">Voir plus d'articles</button>
            </div>
            </div>

        </div>

        </div>
    
        <div class="col">
            <div class="card border-0" style="width: 28rem;margin: auto;">
                <div class="card-body">

                <div class= haut >
                    <p class="card-date"><?php
                                            list($date, $heure) = explode(" ", $articles[1]['dtCreArt']);
                                            list($annee, $mois, $jour) = explode("-", $date);
                                            echo $jour . " " . $touslesmois[$mois - 1] . " " . $annee;
                                            ?></p>
                    <h5 class="card-title"><?php echo $articles[1]['libTitrArt']; ?></h5>
                    <img src="source/images/articles/<?php echo $articles[1]['urlPhotArt']; ?>" class="img-article" alt="image article à la une 2" style="width: 384.02px; height: 215.22px; object-fit: cover; object-position: 50% 0;">
                    <p class="card-text"><?php echo $articles[1]['libAccrochArt']; ?></p>
                    <a href="#" class="card-link">lire la suite</a>
                </div>
            </div>
            <div class="card border-0" style="width: 28rem;margin: auto;">
                <div class="card-body">
                    <p class="card-date"><?php
                                            list($date, $heure) = explode(" ", $articles[2]['dtCreArt']);
                                            list($annee, $mois, $jour) = explode("-", $date);
                                            echo $jour . " " . $touslesmois[$mois - 1] . " " . $annee;
                                            ?></p>
                    <h5 class="card-title"><?php echo $articles[2]['libTitrArt']; ?></h5>
                    <img src="source/images/articles/<?php echo $articles[2]['urlPhotArt']; ?>" class="img-article" alt="image article à la une 2" style="width: 384.02px; height: 215.22px; object-fit: cover; object-position: 50% 0;">
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
    const cards = document.querySelectorAll('.card-body');
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

.cookie-card {
    border-radius:15px;
    margin : 0;
    padding:0;
    box-sizing : border-box;
    position:fixed;
    bottom:2em;
    right:2em;
    width:350px;
    background-color:#5C1919;
    padding:1.5em;
    z-index: 2;
     
}
.cookie-card *{
color:white;
}

.title {
    font-size:1.4em;
    letter-spacing:0.4px;
    margin-bottom:0.5em;
}

.info {
    line-height:1.4em;
    letter-spacing:0.4px;
    margin-bottom:2em;
}

.cta {
    border:none;
    outline:none;
    background-color:#5C1919;
    padding:0.8em 1.5em;
    font-size: 1.1em;
    font-weight:bold;
    cursor:pointer;
    transition:background-color 0.4s;
    border-radius: 10px
}

.cta:hover {
    background-color:#938A89;
}

.lien-cookie {
    text-decoration:none;
    border-bottom:1px  solid;
    transition : color 0.4s; 
}

a:hover{
    color : #938A89;
}
a.settings {
    color:#bbb;
    border-bottom:none;
    margin-left:1em;
}
</style>