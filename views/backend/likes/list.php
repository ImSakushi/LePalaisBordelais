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
$likes = sql_select("LIKEART", "*", 'likeA = 1');
?>

<!-- Bootstrap default layout to display all status in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Dashboard admin</h1>
            <h2>Likes</h1>
                <p>Gérez vos likes</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Pseudo</th>
                            <th>Article</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                            <?php foreach ($likes as $like) : ?>
                                <form action="<?php echo ROOT_URL . '/api/likes/delete.php' ?>" method="post">
                                <tr>
                                    <td>

                                        <?php
                                        $usernamenumber = $like['numMemb'];
                                        $usernamelike = sql_select('MEMBRE', 'pseudomemb', "numMemb = $usernamenumber");
                                        echo $usernamelike[0][0]; ?></td>
                                    <td><?php
                                        $articlenumber = $like['numArt'];
                                        $articlename = sql_select('ARTICLE', 'libTitrArt', "numArt = $articlenumber");
                                        echo $articlename[0][0]; ?></td>

                                    <td>
                                    <input id="numMemb" class="form-control" type="text" style="display: none;" name="numMemb" value="<?php echo ($like['numMemb']) ?>" readonly="readonly">
                                    <input id="numArt" class="form-control" type="text" style="display: none;" name="numArt" value="<?php echo ($like['numArt']) ?>" readonly="readonly">
                                        <button type="submit" class="btn btn-outline-dark">Supprimer</button>
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
