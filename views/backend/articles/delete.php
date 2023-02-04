<?php

//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

include '../../../header.php';

$numArt = $_GET['numArt'];
$libTitrArt = sql_select("ARTICLE", "libTitrArt", "numArt = $numArt")[0]['libTitrArt'];
?>

<!--Bootstrap form to create a new articles-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Delete?</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new articles-->
            <form action="<?php echo ROOT_URL . '/api/articles/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="libTitrArt">libTitrArt</label>
                    <input id="numArt" class="form-control" type="text" style="display: none;" name="numArt" value="<?php echo($numArt) ?>" readonly="readonly" >
                    <input id="libTitrArt" class="form-control" type="text" name="libTitrArt" value="<?php echo($libTitrArt) ?>" readonly="readonly">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>