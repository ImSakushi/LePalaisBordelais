<?php
include '../../../header.php'; // contains the header and call to config.php
include '../../check_access.php';
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

//Load all statuses
$thematiques = sql_select("THEMATIQUE", "*");
?>

<!-- Bootstrap default layout to display all status in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Dashboard admin</h1>
            <h2>Thématiques</h1>
            <p>Gérez vos thématiques</p>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nom de la thématique</th>
                        <th>ID</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($thematiques as $thematique) { ?>
                        <tr>
                            <td><?php echo $thematique['libThem']; ?></td>
                            <td><?php echo $thematique['numThem']; ?></td>
                            <td>
                                <a href="edit.php?numThem=<?php echo $thematique['numThem']; ?>" class="btn btn-outline-dark">Modifier</a>
                                <a href="delete.php?numThem=<?php echo $thematique['numThem']; ?>" class="btn btn-outline-dark">Supprimer</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create.php" class="btn btn-dark">Créer</a>
            <hr class="hr" />
        </div>
    </div>

<style>

th {
    font-weight:bold;
    color:#828282;
}

h1 {
    text-align:center;
    padding-top:40px
}

h2 {
    font-weight:bold;
}

th {
    background-color:#F2F2F2;
}


</style>

<?php


