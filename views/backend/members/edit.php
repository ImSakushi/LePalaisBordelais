<?php

//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

include '../../../header.php';
include '../../check_access.php';

$numMemb = $_GET['numMemb'];
$prenomMemb = sql_select("MEMBRE", "prenomMemb", "numMemb = $numMemb")[0]['prenomMemb'];
$nomMemb = sql_select("MEMBRE", "nomMemb", "numMemb = $numMemb")[0]['nomMemb'];
$pseudoMemb = sql_select("MEMBRE", "pseudoMemb", "numMemb = $numMemb")[0]['pseudoMemb'];
$passMemb = sql_select("MEMBRE", "passMemb", "numMemb = $numMemb")[0]['passMemb'];
$eMailMemb = sql_select("MEMBRE", "eMailMemb", "numMemb = $numMemb")[0]['eMailMemb'];
$dtCreaMemb = sql_select("MEMBRE", "dtCreaMemb", "numMemb = $numMemb")[0]['dtCreaMemb'];
list($date, $heure) = explode(" ", $dtCreaMemb);
$numStat = sql_select("MEMBRE", "numStat", "numMemb = $numMemb")[0]['numStat'];
$statuts = sql_select("STATUT", "*");

?>

<!--Bootstrap form to create a new articles-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Dashboard Admin</h1>
            <h2>Modifiez votre article</h2>
        </div>
        <div class="col-md-12">
            <!--Form to create a new articles-->
            <form action="<?php echo ROOT_URL . '/api/members/edit.php' ?>" method="post" enctype='multipart/form-data'>
                <div class="form-group">
                <input id="numMemb" class="form-control" type="text" style="display: none;" name="numMemb" value="<?php echo($numMemb) ?>" readonly="readonly" >
                    <label for="pseudoMemb">Pseudo de l'utilisateur : </label>
                    <input id="pseudoMemb"  class="form-control" maxlength="70" value="<?php echo($pseudoMemb) ?>" required placeholder="Ajouter du texte (70 caractères max)" type="text" name="pseudoMemb">
                </div>
                <div class="form-group">
                    <label for="prenomMemb">Prénom de l'utilisateur : </label>
                    <input id="prenomMemb"  class="form-control" maxlength="70" value="<?php echo($prenomMemb) ?>" required placeholder="Ajouter du texte (70 caractères max)" type="text" name="prenomMemb">
                </div>
                <div class="form-group">
                    <label for="nomMemb">Nom de l'utilisateur : </label>
                    <input id="nomMemb"  class="form-control" maxlength="70" value="<?php echo($nomMemb) ?>" required placeholder="Ajouter du texte (70 caractères max)" type="text" name="nomMemb">
                </div>
                <div class="form-group">
                    <label for="passMemb">Mot de passe de l'utilisateur : </label>
                    <input id="passMemb"  class="form-control" maxlength="70" required placeholder="Ajouter du texte (70 caractères max)" type="password" name="passMemb">
                </div>
                <div class="form-group">
                    <label for="eMailMemb">E-mail de l'utilisateur : </label>
                    <input id="eMailMemb"  class="form-control" maxlength="70" value="<?php echo($eMailMemb) ?>" required placeholder="Ajouter du texte (70 caractères max)" type="text" name="eMailMemb">
                </div>
                <div class="form-group">
                    <label for="article_choice">Choisir le rôle du membre</label>
                    <select id="numStat" class="form-control" type="text" name="numStat">
                    <?php foreach ($statuts as $statut => $value) : ?>
                        <option value="<?php echo $value['numStat']; ?>"<?php if ($value['numStat'] == $numStat) {
                            echo 'selected';
                        }?>><?php echo $value['libStat']; ?></option>
                    <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="dtCreaMemb">Date de création du compte :</label>
                    <input type="date" name="dtCreaMemb" id="dtCreaMemb" value="<?php echo $date?>" placeholder="Date de création">
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