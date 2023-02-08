<?php
include '../../header.php';
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        $error = "Les identifiants sont invalides.";
    } else {
        $testusername = sql_select("MEMBRE", "pseudoMemb", "pseudoMemb = '$username'");
        if ($testusername[0][0] == $username) {
            $testpassword = sql_select("MEMBRE", "passMemb", "passMemb = '$password'");
            if ($testpassword[0][0] == $password) {
               header("location: ../../index.php");
               session_start();
               $_SESSION["username"] = $username;
               $id_user = sql_select("MEMBRE", "numStat", "pseudoMemb = '$username'")[0]['numStat'];
               $_SESSION["id_user"] = $id_user;
            } else {
                $error = "Les identifiants sont invalides.";
            }
            
        } else {
            $error = "Les identifiants sont invalides.";
        }
    }
}
?>
<div class="login-page">
    <div class="login-container">
        <h1>Connexion</h1>

        <div class="row g-0">
            <div class="col-md-12">
                <p>Vous n'avez pas de compte ?<a href="register.php"> S'inscrire</a></p> 
            </div>
            
        </div>

        <?php if (isset($error)) { echo '<p class="error">' . $error . '</p>'; } ?>
        <form class="login-flex" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input class="username" type="text" name="username" placeholder="Nom d'utilisateur">
            <input class="password" type="password" name="password" placeholder="Mot de passe">
            <button name="submit" type="submit">Se connecter</button>
        </form>
    </div>
</div>
</div>
<?php
include 'footer.php';
?>
<style>
.login-page {
    background-color: #f2f2f2;
    font-family: 'Roboto', sans-serif;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

.login-container {
    background-color: #fff;
    border: 1px solid #ddd;
    box-shadow: 0px 0px 10px #ddd;
    border-radius: 10px;
    padding: 20px;
    width: 400px;
    text-align: center;
}

h1 {
    font-size: 24px;
    margin-bottom: 20px;
}

.login-flex {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.username,
.password {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

button[type="submit"] {
    background-color: #5C1919;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    order: none;
}

button[type="submit"]:hover {
    background-color: black;
}

.error {
    color: #ff0000;
}

a {
    text-decoration:none;

}



</style>

