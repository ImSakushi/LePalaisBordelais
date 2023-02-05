<?php
include '../../../header.php'; // contains the header and call to config.php
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

//Load all statuses
$articles = sql_select("ARTICLE", "*");
?>

<!-- Bootstrap default layout to display all status in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Articles</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>ID</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($articles as $article) { ?>
                        <tr>
                            <td><?php echo $article['libTitrArt']; ?></td>
                            <td><?php echo $article['numArt']; ?></td>
                            <td>
                                <a href="../../../article.php?numArt=<?php echo $article['numArt']; ?>" class="btn btn-success">Voir</a>
                                <a href="edit.php?numArt=<?php echo $article['numArt']; ?>" class="btn btn-warning">Modifier</a>
                                <a href="delete.php?numArt=<?php echo $article['numArt']; ?>" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create.php" class="btn btn-success">Create</a>
        </div>
    </div>

<?php
include '../../../footer.php'; // contains the footer