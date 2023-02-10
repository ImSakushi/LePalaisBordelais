<?php


include '../../../header.php';
include '../../check_access.php';

$numMemb = $_GET['numMemb'];
$likes = sql_select("LIKEART", "numArt", "numMemb = $numMemb");
?>

<!--Bootstrap form to create a new status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Supprimer ?</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new status-->
            <form action="<?php echo ROOT_URL . '/api/likes/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="libThem">Nom de la thématique :</label>
                    <input id="numThem" class="form-control" type="text" style="display: none;" name="numThem" value="<?php echo ($numThem) ?>" readonly="readonly">
                    <input id="libThem" class="form-control" type="text" name="libThem" value="<?php echo ($libThem) ?>" readonly="readonly">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
        </div>
        </form>
    </div>
</div>
</div>