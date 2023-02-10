<?php
include '../../header.php';
//Security check
//Level 1 mean administator in DB

include 'check_access.php';
?>

<!--Bootstrap admin dashboard template-->
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Dashboard Admin</h1>
                
            </div>
            <div class="col-md-12">
            <h2>Pages admin</h2>
            <p>Gérez vos pages administrateurs</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Page</th>
                            <th>Actions</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Statuts</td>
                            <td>
                                <a href="/views/backend/status/list.php" class="btn btn-outline-dark 
                                <?php if ($_SESSION['id_user'] == 1) {
                                    echo "";
                                } else {
                                    echo "disabled";
                                }?>">Liste</a>
                                <a href="/views/backend/status/create.php" class="btn btn-outline-dark 
                                <?php if ($_SESSION['id_user'] == 1) {
                                    echo "";
                                } else {
                                    echo "disabled";
                                }?>" >Créer</a>
                                <a href="/views/backend/status/list.php" class="btn btn-outline-dark 
                                <?php if ($_SESSION['id_user'] == 1) {
                                    echo "";
                                } else {
                                    echo "disabled";
                                }?>">Modifier</a>
                            </td>
                            <td>
                              
                            </td>
                        </tr>
                        <tr>
                            <td>Membres</td>
                            <td>
                                <a href="/views/backend/members/list.php" class="btn btn-outline-dark 
                                <?php if ($_SESSION['id_user'] == 1) {
                                    echo "";
                                } else {
                                    echo "disabled";
                                }?>">Liste</a>
                                <a href="/views/backend/members/create.php" class="btn btn-outline-dark 
                                <?php if ($_SESSION['id_user'] == 1) {
                                    echo "";
                                } else {
                                    echo "disabled";
                                }?>">Créer</a>
                                <a href="/views/backend/members/list.php" class="btn btn-outline-dark 
                                <?php if ($_SESSION['id_user'] == 1) {
                                    echo "";
                                } else {
                                    echo "disabled";
                                }?>">Modifier</a>
                            </td>
                           
                        </tr>
                        <tr>
                            <td>Articles</td>
                            <td>
                                <a href="/views/backend/articles/list.php" class="btn btn-outline-dark 
                                <?php if ($_SESSION['id_user'] == 1) {
                                    echo "";
                                } else {
                                    echo "disabled";
                                }?>">Liste</a>
                                <a href="/views/backend/articles/create.php" class="btn btn-outline-dark 
                                <?php if ($_SESSION['id_user'] == 1) {
                                    echo "";
                                } else {
                                    echo "disabled";
                                }?>">Créer</a>
                                <a href="/views/backend/articles/list.php" class="btn btn-outline-dark 
                                <?php if ($_SESSION['id_user'] == 1) {
                                    echo "";
                                } else {
                                    echo "disabled";
                                }?>">Modifier</a>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Thématiques</td>
                            <td>
                                <a href="/views/backend/thematiques/list.php" class="btn btn-outline-dark 
                                <?php if ($_SESSION['id_user'] == 1) {
                                    echo "";
                                } else {
                                    echo "disabled";
                                }?>">Liste</a>
                                <a href="/views/backend/thematiques/create.php" class="btn btn-outline-dark 
                                <?php if ($_SESSION['id_user'] == 1) {
                                    echo "";
                                } else {
                                    echo "disabled";
                                }?>">Créer</a>
                                <a href="/views/backend/thematiques/list.php" class="btn btn-outline-dark 
                                <?php if ($_SESSION['id_user'] == 1) {
                                    echo "";
                                } else {
                                    echo "disabled";
                                }?>">Modifier</a>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Comments</td>
                            <td>
                                <a href="/views/backend/comments/list.php" class="btn btn-outline-dark">Liste</a>
                                <a href="/views/backend/comments/create.php" class="btn btn-outline-dark">Créer</a>
                                <a href="/views/backend/comments/list.php" class="btn btn-outline-dark">Modifier</a>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Likes</td>
                            <td>
                                <a href="/views/backend/likes/list.php" class="btn btn-outline-dark">Liste</a>
                                <a href="/views/backend/likes/create.php" class="btn btn-outline-dark">Créer</a>
                                <a href="/views/backend/likes/list.php" class="btn btn-outline-dark">Modifier</a>
                            </td>
                     
                        </tr>
                        <tr>
                            <td>Keywords</td>
                            <td>
                                <a href="/views/backend/keywords/list.php" class="btn btn-outline-dark 
                                <?php if ($_SESSION['id_user'] == 1) {
                                    echo "";
                                } else {
                                    echo "disabled";
                                }?>">Liste</a>
                                <a href="/views/backend/keywords/create.php" class="btn btn-outline-dark 
                                <?php if ($_SESSION['id_user'] == 1) {
                                    echo "";
                                } else {
                                    echo "disabled";
                                }?>">Créer</a>
                                <a href="/views/backend/keywords/list.php" class="btn btn-outline-dark 
                                <?php if ($_SESSION['id_user'] == 1) {
                                    echo "";
                                } else {
                                    echo "disabled";
                                }?>">Modifier</a>
                            </td>
                            <td></td>
                        </tr>
                    </tbody>
            </div>
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

th {
    font-weight:bold;
    color:#828282;

}
</style>