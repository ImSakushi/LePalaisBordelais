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
$comments = sql_select('COMMENT', '*');
?>

<!-- Bootstrap default layout to display all status in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Dashboard admin</h1>
            <h2>Commentaires</h1>
                <p>Gérez vos commentaires</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Article</th>
                            <th>Pseudo</th>
                            <th>Commentaire</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($comments as $comment) : ?>
                            <form>
                                <tr>
                                    <td>

                                        <?php
                                        $articlenumber = $comment['numArt'];
                                        $articlename = sql_select('ARTICLE', 'libTitrArt', "numArt = $articlenumber");
                                        echo $articlename[0][0]; ?></td>
                                    <td><?php
                                        $usernamenumber = $comment['numCom'];
                                        $usernamecomment = sql_select('COMMENT', 'numMemb', "numCom = $usernamenumber");
                                        $name_id = $usernamecomment[0][0];
                                        $name = sql_select('MEMBRE', 'pseudomemb', "numMemb = $name_id");
                                        echo $name[0][0] ?></td>
                                    <td><?php
                                        $comment_content = sql_select('COMMENT', 'libCom', "numMemb = $name_id AND numCom = $usernamenumber");
                                        echo $comment_content[0][0] ?></td>

                                    <td>
                                        <input id="numMemb" class="form-control" type="text" style="display: none;" name="numMemb" value="<?php echo ($like['numMemb']) ?>" readonly="readonly">
                                        <input id="numArt" class="form-control" type="text" style="display: none;" name="numArt" value="<?php echo ($like['numArt']) ?>" readonly="readonly">
                                        <a href="../../../api/comments/delete.php?numCom=<?php echo $comment['numCom']; ?>" class="btn btn-outline-dark">Supprimer</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </form>
                    </tbody>
                </table>
                <hr class="hr" />
        </div>
    </div>

    <style>
        th {
            font-weight: bold;
            color: #828282;
        }

        h1 {
            text-align: center;
            padding-top: 40px
        }

        h2 {
            font-weight: bold;
        }

        th {
            background-color: #F2F2F2;
        }
    </style>

    <?php
