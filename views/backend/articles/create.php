<?php
include '../../../header.php';

?>

<!--Bootstrap form to create a new status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Écrire un nouvel article</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new status-->
            <form action="<?php echo ROOT_URL . '/api/articles/create.php' ?>" method="post">
                <div class="form-group">
                    <label for="libTitrArt">Saisir le titre de l'article</label>
                    <input id="libTitrArt" class="form-control" type="text" name="libTitrArt">
                </div>
                <div class="form-group">
                    <label for="libChapoArt">Saisir le chapeau de l'article</label>
                    <input id="libChapoArt" class="form-control" type="text" name="libChapoArt">
                </div>
                <div class="form-group">
                    <label for="libAccrochArt">Accroche</label>
                    <input id="libAccrochArt" class="form-control" type="text" name="libAccrochArt">
                </div>
                <div class="form-group">
                    <label for="parag1Art">Paragraphe 1</label>
                    <input id="parag1Art" class="form-control" type="text" name="parag1Art">
                </div>
                <div class="form-group">
                    <label for="libSsTitr1Art">Sous-titre 2</label>
                    <input id="libSsTitr1Art" class="form-control" type="text" name="libSsTitr1Art">
                </div>
                <div class="form-group">
                    <label for="parag2Art">Paragraphe 2</label>
                    <input id="parag2Art" class="form-control" type="text" name="parag2Art">
                </div>
                <div class="form-group">
                    <label for="libSsTitr2Art">Sous-titre 3</label>
                    <input id="libSsTitr2Art" class="form-control" type="text" name="libSsTitr2Art">
                </div>
                <div class="form-group">
                    <label for="parag3Art">Paragraphe 3</label>
                    <input id="parag3Art" class="form-control" type="text" name="parag3Art">
                </div>
                <div class="form-group">
                    <label for="libConclArt">Conclusion</label>
                    <input id="libConclArt" class="form-control" type="text" name="libConclArt">
                </div>
                <div class="form-group">
                    <label for="article_choice">Choisir le type d'article</label>
                    <select id="numThem" class="form-control" type="text" name="numThem">
                        <option value="1">Événement</option>
                        <option value="2">Acteur-clé</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="urlPhotArt">Insérer votre photo :</label>
                    <input type="file" id="urlPhotArt" name="photo-article">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary color-5C1919">Publier l'article</button>
                </div>
            </form>
        </div>
    </div>
</div>