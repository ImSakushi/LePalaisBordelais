<?php
include '../../../header.php';
include '../../check_access.php';
?>

<!--Bootstrap form to create a new status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Dashboard Admin</h1>
            <h2>Nouveau statuts</h2>
        </div>
        <div class="col-md-12">
            <!--Form to create a new status-->
            <form action="<?php echo ROOT_URL . '/api/status/create.php' ?>" method="post">
                <div class="form-group">
                    <label for="libStat">Nom du statuts</label>
                    <input id="libStat" class="form-control" type="text" name="libStat">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-dark">Créer</button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
h1 {
    text-align:center;
    padding-top:40px
}

h2 {
    font-weight:bold;
}

label {
    font-weight:bold;
    color:#828282;

}
</style>