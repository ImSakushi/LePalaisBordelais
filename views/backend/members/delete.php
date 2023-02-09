<?php


include '../../../header.php';
include '../../check_access.php';

$numMemb = $_GET['numMemb'];
$pseudoMemb = sql_select("MEMBRE", "pseudoMemb", "numMemb = $numMemb")[0]['pseudoMemb'];
?>

<!--Bootstrap form to create a new status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Supprimer ce compte ?</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new status-->
            <form action="<?php echo ROOT_URL . '/api/members/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="pseudoMemb">Pseudo du compte :</label>
                    <input id="numMemb" class="form-control" type="text" style="display: none;" name="numMemb" value="<?php echo($numMemb) ?>" readonly="readonly" >
                    <input id="pseudoMemb" class="form-control" type="text" name="pseudoMemb" value="<?php echo($pseudoMemb) ?>" readonly="readonly">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </div>
            </form>
        </div>
    </div>
</div>