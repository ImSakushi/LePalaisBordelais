<?php

//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

include '../../../header.php';
include '../../check_access.php';

$numThem = $_GET['numThem'];
$libThem = sql_select("THEMATIQUE", "libThem", "numThem = $numThem")[0]['libThem'];
$thematiques = sql_select("THEMATIQUE", "*");

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
            <form action="<?php echo ROOT_URL . '/api/thematiques/edit.php' ?>" method="post" enctype='multipart/form-data'>
                <div class="form-group">
                <input id="numThem" class="form-control" type="text" style="display: none;" name="numThem" value="<?php echo($numThem) ?>" readonly="readonly" >
                    <label for="libThem">Nom de la thématique : </label>
                    <input id="libThem"  class="form-control" maxlength="60" value="<?php echo($libThem) ?>" required placeholder="Ajouter du texte (60 caractères max)" type="text" name="libThem">
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