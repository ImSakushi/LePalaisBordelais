<?php


//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */



include '../../../header.php';
include '../../check_access.php';
$thematiques = sql_select("THEMATIQUE", "*");

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
$keywords = sql_select("MOTCLE", "*");
$keywordselected = sql_select("MOTCLEARTICLE", "numMotCle", "numArt = $numArt");
$array_keywords = array();
foreach($keywordselected as $keyword){
    $array_keywords[] = $keyword['numMotCle'];
}

?>

<!--Bootstrap form to create a new articles-->
<p><?php echo $keywordselected[0][0]?></p>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Dashboard Admin</h1>
            <h2>Modifier votre article</h2>
        </div>
        <div class="col-md-12">
            <!--Form to create a new articles-->
            <form action="<?php echo ROOT_URL . '/api/articles/edit.php' ?>" method="post" enctype='multipart/form-data'>
                <div class="form-group">
                <input id="numArt" class="form-control" type="text" style="display: none;" name="numArt" value="<?php echo($numArt) ?>" readonly="readonly" >
                    <label for="libTitrArt">Saisir le titre de l'article<span>*</span></label>
                    <input id="libTitrArt"  class="form-control" maxlength="70" value="<?php echo($libTitrArt) ?>" required placeholder="Ajouter du texte (70 caractères max)" type="text" name="libTitrArt">
                </div>
                <div class="form-group">
                    <label for="libChapoArt">Saisir le chapeau de l'article<span>*</span></label>
                    <textarea id="libChapoArt" class="form-control" rows="2"  maxlength="250" cols="10" required placeholder="Ajouter du texte (250 caractères max)" type="text" name="libChapoArt"><?php echo($libChapoArt) ?></textarea>
                </div>
                <div class="form-group">
                    <label for="libAccrochArt">Accroche<span>*</span></label>
                    <textarea id="libAccrochArt" class="form-control" rows="2"  maxlength="150" cols="10" required placeholder="Ajouter du texte (150 caractères max)" type="text" name="libAccrochArt"><?php echo($libAccrochArt) ?></textarea>
                </div>
                <div class="form-group">
                    <label for="parag1Art">Paragraphe 1<span>*</span></label>
                    <textarea id="parag1Art" class="form-control" rows="12"  maxlength="10000" cols="10" required placeholder="Ajouter du texte (10 000 caractères max)" type="text" name="parag1Art"><?php echo($parag1Art) ?></textarea>
                </div>
                <div class="form-group">
                    <label for="libSsTitr1Art">Sous-titre 2<span>*</span></label>
                    <input id="libSsTitr1Art" class="form-control" maxlength="150" value="<?php echo($libSsTitr1Art) ?>" required placeholder="Ajouter du texte (150 caractères max)" type="text" name="libSsTitr1Art">
                </div>
                <div class="form-group">
                    <label for="parag2Art">Paragraphe 2<span>*</span></label>
                    <textarea id="parag2Art" class="form-control" rows="12"  maxlength="10000" cols="10" required placeholder="Ajouter du texte (10 000 caractères max)" type="text" name="parag2Art"><?php echo($parag2Art) ?></textarea>
                </div>
                <div class="form-group">
                    <label for="libSsTitr2Art">Sous-titre 3<span>*</span></label>
                    <input id="libSsTitr2Art" class="form-control" maxlength="150" value="<?php echo($libSsTitr2Art) ?>" required placeholder="Ajouter du texte (150 caractères max)" type="text" name="libSsTitr2Art">
                </div>
                <div class="form-group">
                    <label for="parag3Art">Paragraphe 3<span>*</span></label>
                    <textarea id="parag3Art" class="form-control" rows="12"  maxlength="10000" cols="10" required placeholder="Ajouter du texte (10 000 caractères max)" type="text" name="parag3Art"><?php echo($parag3Art) ?></textarea>
                </div>
                <div class="form-group">
                    <label for="libConclArt">Conclusion<span>*</span></label>
                    <textarea id="libConclArt" class="form-control" rows="6"  maxlength="5000" cols="10" required placeholder="Ajouter du texte (5 000 caractères max)" type="text" name="libConclArt"><?php echo($libConclArt) ?></textarea>
                </div>
                <div class="form-group">
                    <label for="article_choice">Choisir le type d'article</label>
                    <select id="numThem" class="form-control" type="text" name="numThem">
                    <?php foreach ($thematiques as $thematique => $value) : ?>
                        <option value="<?php echo $value['numThem']; ?>"<?php if ($value['numThem'] == $numThem) {
                            echo 'selected';
                        }?>><?php echo $value['libThem']; ?></option>
                    <?php endforeach; ?>
                    </select>
                </div>
                <label for="article_choice">Selectionnez vos mot-clés</label>
                <?php foreach ($keywords as $keyword => $value) : ?>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="keywords[]" value="<?php echo $value['numMotCle']; ?>" id="flexCheckDefault" <?php if (in_array($value['numMotCle'], $array_keywords)) {
                        echo 'checked';
                    } else {
                        echo '';
                    }?>>
                    <label class="form-check-label" for="keywords">
                        <?php echo $value['libMotCle']; ?>
                    </label>
                </div>
                <?php endforeach; ?> 
                <div class="form-group">
                    <label for="urlPhotArt">Insérer votre photo :</label>
                    <input id="urlPhotArt" type="file" name="urlPhotArt" class="form-control" accept="image/jpg, image/jpeg, image/png, image/webp">
                </div>
                <div class="form-group">
                    <label for="dtCreArt">Date de création :</label>
                    <input type="date" name="dtCreArt" id="dtCreArt" value="<?php echo $date?>" placeholder="Date de création">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-dark">Appliquer les modifications</button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
h1 {
    text-align:center;
    padding:40px
}

h2 {
    font-weight:bold;
}

label {
    font-weight:bold;
    color:#828282;

}
</style>