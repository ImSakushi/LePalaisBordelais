<?php

//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

include '../../../header.php';
include '../../check_access.php';

$numArt = $_GET['numArt'];
$libTitrArt = sql_select("ARTICLE", "libTitrArt", "numArt = $numArt")[0]['libTitrArt'];
$libChapoArt = sql_select("ARTICLE", "libChapoArt", "numArt = $numArt")[0]['libChapoArt'];
$libAccrochArt = sql_select("ARTICLE", "libAccrochArt", "numArt = $numArt")[0]['libAccrochArt'];
$parag1Art = sql_select("ARTICLE", "parag1Art", "numArt = $numArt")[0]['parag1Art'];
$libSsTitr1Art = sql_select("ARTICLE", "libSsTitr1Art", "numArt = $numArt")[0]['libSsTitr1Art'];
$parag2Art = sql_select("ARTICLE", "parag2Art", "numArt = $numArt")[0]['parag2Art'];
$libSsTitr2Art = sql_select("ARTICLE", "libSsTitr2Art", "numArt = $numArt")[0]['libSsTitr2Art'];
$parag3Art = sql_select("ARTICLE", "parag3Art", "numArt = $numArt")[0]['parag3Art'];
$libConclArt = sql_select("ARTICLE", "libConclArt", "numArt = $numArt")[0]['libConclArt'];
$dtCreArt = sql_select("ARTICLE", "dtCreArt", "numArt = $numArt")[0]['dtCreArt'];
list($date, $heure) = explode(" ", $dtCreArt);
$urlPhotArt = sql_select("ARTICLE", "urlPhotArt", "numArt = $numArt")[0]['urlPhotArt'];
$numThem = sql_select("ARTICLE", "numThem", "numArt = $numArt")[0]['numThem'];
?>

<!--Bootstrap form to create a new articles-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Supprimer ?</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new articles-->
            <form action="<?php echo ROOT_URL . '/api/articles/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="libTitrArt">Nom de l'article :</label>
                    <input id="numArt" class="form-control" type="text" style="display: none;" name="numArt" value="<?php echo($numArt) ?>" readonly="readonly" >
                    <input id="libTitrArt" class="form-control" type="text" name="libTitrArt" value="<?php echo($libTitrArt) ?>" readonly="readonly">
                </div>
                <div class="form-group">
                    <label for="libChapoArt">Chapeau de l'article<span>*</span></label>
                    <textarea id="libChapoArt" class="form-control" rows="2"  maxlength="250" cols="10" required placeholder="Ajouter du texte (250 caractères max)" type="text" name="libChapoArt" readonly="readonly"><?php echo($libChapoArt) ?></textarea>
                </div>
                <div class="form-group">
                    <label for="libAccrochArt">Accroche<span>*</span></label>
                    <textarea id="libAccrochArt" class="form-control" rows="2"  maxlength="150" cols="10" required placeholder="Ajouter du texte (150 caractères max)" type="text" name="libAccrochArt" readonly="readonly"><?php echo($libAccrochArt) ?></textarea>
                </div>
                <div class="form-group">
                    <label for="parag1Art">Paragraphe 1<span>*</span></label>
                    <textarea id="parag1Art" class="form-control" rows="12"  maxlength="10000" cols="10" required placeholder="Ajouter du texte (10 000 caractères max)" type="text" name="parag1Art" readonly="readonly"><?php echo($parag1Art) ?></textarea>
                </div>
                <div class="form-group">
                    <label for="libSsTitr1Art">Sous-titre 2<span>*</span></label>
                    <input id="libSsTitr1Art" class="form-control" maxlength="150" value="<?php echo($libSsTitr1Art) ?>" required placeholder="Ajouter du texte (150 caractères max)" type="text" name="libSsTitr1Art" readonly="readonly">
                </div>
                <div class="form-group">
                    <label for="parag2Art">Paragraphe 2<span>*</span></label>
                    <textarea id="parag2Art" class="form-control" rows="12"  maxlength="10000" cols="10" required placeholder="Ajouter du texte (10 000 caractères max)" type="text" name="parag2Art" readonly="readonly"><?php echo($parag2Art) ?></textarea>
                </div>
                <div class="form-group">
                    <label for="libSsTitr2Art">Sous-titre 3<span>*</span></label>
                    <input id="libSsTitr2Art" class="form-control" maxlength="150" value="<?php echo($libSsTitr2Art) ?>" required placeholder="Ajouter du texte (150 caractères max)" type="text" name="libSsTitr2Art" readonly="readonly">
                </div>
                <div class="form-group">
                    <label for="parag3Art">Paragraphe 3<span>*</span></label>
                    <textarea id="parag3Art" class="form-control" rows="12"  maxlength="10000" cols="10" required placeholder="Ajouter du texte (10 000 caractères max)" type="text" name="parag3Art" readonly="readonly"><?php echo($parag3Art) ?></textarea>
                </div>
                <div class="form-group">
                    <label for="libConclArt">Conclusion<span>*</span></label>
                    <textarea id="libConclArt" class="form-control" rows="6"  maxlength="5000" cols="10" required placeholder="Ajouter du texte (5 000 caractères max)" type="text" name="libConclArt" readonly="readonly"><?php echo($libConclArt) ?></textarea>
                </div>
                <div class="form-group">
                    <label for="article_choice">Type d'article</label>
                    <select id="numThem" class="form-control" type="text" name="numThem">
                        <option value="1">Événement</option>
                        <option value="2">Acteur-clé</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="dtCreArt">Date de création :</label>
                    <input type="date" name="dtCreArt" id="dtCreArt" value="<?php echo $date?>" placeholder="Date de création"  readonly="readonly">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Supprimer l'article</button>
                </div>
            </form>
        </div>
    </div>
</div>