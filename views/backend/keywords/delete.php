<?php


include '../../../header.php';
include '../../check_access.php';

$numMotCle = $_GET['numMotCle'];
$libMotCle = sql_select("MOTCLE", "libMotCle", "numMotCle = $numMotCle")[0]['libMotCle'];
?>

<!--Bootstrap form to create a new status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Supprimer ?</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new status-->
            <form action="<?php echo ROOT_URL . '/api/keywords/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="keyword">Nom du mot clé :</label>
                    <input id="numMotCle" class="form-control" type="text" style="display: none;" name="numMotCle" value="<?php echo($numMotCle) ?>" readonly="readonly" >
                    <input id="keyword" class="form-control" type="text" name="keyword" value="<?php echo($libMotCle) ?>" readonly="readonly">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </div>
            </form>
        </div>
    </div>
</div>