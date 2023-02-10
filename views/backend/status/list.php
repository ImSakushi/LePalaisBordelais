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
$statuses = sql_select("STATUT", "*");
?>

<!-- Bootstrap default layout to display all status in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Dashboard Admin</h1>
            <h2>Status</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($statuses as $status) { ?>
                        <tr>
                            <td><?php echo $status['numStat']; ?></td>
                            <td><?php echo $status['libStat']; ?></td>
                            <td>
                                <a href="edit.php?numStat=<?php echo $status['numStat']; ?>" class="btn btn-outline-dark">Modifier</a>
                                <a href="delete.php?numStat=<?php echo $status['numStat']; ?>" class="btn btn-outline-dark">Supprimer</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create.php" class="btn btn-dark">Create</a>
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
