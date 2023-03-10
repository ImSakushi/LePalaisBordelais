<?php
include '../../../header.php';
include '../../check_access.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Dashboard Admin</h1>
            <h2>Nouveau mot-clé</h2>
        </div>
        <div class="col-md-12">
            <form action="<?php echo ROOT_URL . '/api/keywords/create.php' ?>" method="post">
                <div class="form-group">
                    <label for="keyword">Nom du mot-clé</label>
                    <input id="keyword" class="form-control" type="text" name="keyword">
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