<?php
include '../../../header.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvel article</title>
    <link rel="stylesheet" href="/source/css/style.css">
</head>
<body>
    
</body>
</html>
<!--Bootstrap form to create a new status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Dashboard Admin</h1>
            <h2>Écrire un nouvel article</h2>
        </div>
        <div class="col-md-12">
            <!--Form to create a new status-->
            <form action="<?php echo ROOT_URL . '/api/members/create.php' ?>" method="post" enctype='multipart/form-data'>
            <div class="form-group">
                <input id="numArt" class="form-control" type="text" style="display: none;" name="numArt" value="<?php echo($numArt) ?>" readonly="readonly" >
                    <label for="libTitrArt">Saisir le titre de l'article<span>*</span></label>
                    <input id="libTitrArt"  class="form-control" maxlength="70" required placeholder="Ajouter du texte (70 caractères max)" type="text" name="libTitrArt">
                </div>
                <div class="form-group">
                    <label for="libChapoArt">Saisir le chapeau de l'article<span>*</span></label>
                    <textarea id="libChapoArt" class="form-control" rows="2"  maxlength="250" cols="10" required placeholder="Ajouter du texte (250 caractères max)" type="text" name="libChapoArt"></textarea>
                </div>
                <div class="form-group">
                    <label for="libAccrochArt">Accroche<span>*</span></label>
                    <textarea id="libAccrochArt" class="form-control" rows="2"  maxlength="150" cols="10" required placeholder="Ajouter du texte (150 caractères max)" type="text" name="libAccrochArt"></textarea>
                </div>
                <div class="form-group">
                    <label for="parag1Art">Paragraphe 1<span>*</span></label>
                    <textarea id="parag1Art" class="form-control" rows="12"  maxlength="10000" cols="10" required placeholder="Ajouter du texte (10 000 caractères max)" type="text" name="parag1Art"></textarea>
                </div>
                <div class="form-group">
                    <label for="libSsTitr1Art">Sous-titre 2<span>*</span></label>
                    <input id="libSsTitr1Art" class="form-control" maxlength="150" required placeholder="Ajouter du texte (150 caractères max)" type="text" name="libSsTitr1Art">
                </div>
                <div class="form-group">
                    <label for="parag2Art">Paragraphe 2<span>*</span></label>
                    <textarea id="parag2Art" class="form-control" rows="12"  maxlength="10000" cols="10" required placeholder="Ajouter du texte (10 000 caractères max)" type="text" name="parag2Art"></textarea>
                </div>
                <div class="form-group">
                    <label for="libSsTitr2Art">Sous-titre 3<span>*</span></label>
                    <input id="libSsTitr2Art" class="form-control" maxlength="150" required placeholder="Ajouter du texte (150 caractères max)" type="text" name="libSsTitr2Art">
                </div>
                <div class="form-group">
                    <label for="parag3Art">Paragraphe 3<span>*</span></label>
                    <textarea id="parag3Art" class="form-control" rows="12"  maxlength="10000" cols="10" required placeholder="Ajouter du texte (10 000 caractères max)" type="text" name="parag3Art"></textarea>
                </div>
                <div class="form-group">
                    <label for="libConclArt">Conclusion<span>*</span></label>
                    <textarea id="libConclArt" class="form-control" rows="6"  maxlength="5000" cols="10" required placeholder="Ajouter du texte (5 000 caractères max)" type="text" name="libConclArt"></textarea>
                </div>
                <div class="form-group">
                    <label for="article_choice">Choisir le type d'article</label>
                    <select id="numThem" class="form-control" type="text" name="numThem">
                        <option value="" selected disabled>-- Sélectionner la catégorie* </option>
                        <option value="1">Événement</option>
                        <option value="2">Acteur-clé</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="urlPhotArt">Insérer votre photo :</label>
                    <input id="urlPhotArt" type="file" name="urlPhotArt" class="box" accept="image/jpg, image/jpeg, image/png, image/webp">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-dark">Publier l'article</button>
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