<!-- SELECT * FROM `ARTICLE` WHERE libTitrArt LIKE '%CHU%' OR libChapoArt LIKE '%culinaire%' OR libAccrochArt LIKE '%culinaire%' OR parag1Art LIKE '%culinaire%' OR libSsTitr1Art LIKE '%culinaire%' OR parag2Art LIKE '%culinaire%' OR libSsTitr2Art LIKE '%culinaire%' OR parag3Art LIKE '%culinaire%' OR libConclArt LIKE '%culinaire%' -->

<?php require_once 'header.php';
$recherche = sql_escape($_POST['recherche']);
$articles = sql_select("ARTICLE", "*", "libTitrArt LIKE '%$recherche%' OR libChapoArt LIKE '%$recherche%' OR libAccrochArt LIKE '%$recherche%' OR parag1Art LIKE '%$recherche%' OR libSsTitr1Art LIKE '%$recherche%' OR parag2Art LIKE '%$recherche%' OR libSsTitr2Art LIKE '%$recherche%' OR parag3Art LIKE '%$recherche%' OR libConclArt LIKE '%$recherche%'");
$touslesmois = array(
    "janvier", "février", "mars", "avril", "mai", "juin",
    "juillet", "août", "septembre", "octobre", "novembre", "décembre"
);


?>

<div class="container">
    <p><br></p>
    <div class="text-center"><h1 class="fw-bolder" >Résultat de la recherche "<?php echo $recherche?>"</h1></div>
    <p><br></p>



  <div class="btn-group" role="group">
    <button type="button" class="btn btn-outline-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
      Trier par
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Restaurants</a></li>
      <li><a class="dropdown-item" href="#">Plats</a></li>
      <li><a class="dropdown-item" href="#">Thématiques</a></li>
    </ul>
  </div>

  <p><br></p>

    <?php foreach ($articles as $article => $value) : ?>


       
    <div class="card mb-3" style="max-width: 720px;">
        <div class="row g-0">
            <div class="col-md-6">
            <h5 class="card-title"><?php echo $articles[$article]['libTitrArt'];?></h5>
            <a href="article.php?numArt=<?php echo $articles[$article]['numArt']; ?>">
                <img src="source/images/articles/<?php echo $articles[$article]['urlPhotArt'];?>" class="img-fluid img-article" style="width: 547px; height: 249px; object-fit: cover; object-position: 50% 0;" alt="image article">
            </a>
            </div>
            <div class="col-md-6">
                <div class="card-body">
                <p><br></p>
                <p class="card-date"><?php
                                            list($date, $heure) = explode(" ", $articles[$article]['dtCreArt']);
                                            list($annee, $mois, $jour) = explode("-", $date);
                                            echo $jour . " " . $touslesmois[$mois - 1] . " " . $annee;
                                            ?></p>
                    <a href="article.php?numArt=<?php echo $articles[$article]['numArt']; ?>" class="card-text"><?php echo $articles[$article]['libAccrochArt'];?></a>

                    <p><br></p>

                    <div class ="etoile">
                        <div class="col-md-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-half" viewBox="0 0 16 16">
                                <path d="M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z"/>
                            </svg>
                        </div>
                    </div>
                    <p><br></p>
                    <div class="d-grid gap-2 col-12 mx-auto">
                    <button onclick="location.href='article.php?numArt=<?php echo $articles[$article]['numArt']; ?>';" class="btn btn-outline-dark" type="button">Lire l'article</button>
                    </div>
                    
                </div>
            </div>
            <p><br></p>
        </div>
        </div>

        <?php endforeach; ?>
    </div>
</div>
<?php require_once 'footer.php'; ?>
<style>

a {
    color: black;
    text-decoration: none;
}

</style>