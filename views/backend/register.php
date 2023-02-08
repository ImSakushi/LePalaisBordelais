<?php
include '../../header.php';
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];

    // $password = password_hash($password, PASSWORD_DEFAULT);
    // echo $password;
    if (empty($username) || empty($password)) {
        $error = "Les identifiants sont user.";
    } else {
        if (empty($nom) || empty($prenom)) {
            $error = "Les identifiants sont nom.";
            } else {
                if (empty($email)) {
                $error = "Les identifiants sont mails.";
                } else {
                    echo "OK";
                    $testusername = sql_select("MEMBRE", "pseudoMemb", "pseudoMemb = '$username'");
                    if ($testusername[0][0] == $username) {
                        $error = "Le pseudo est déjà utilisé.";
                    } else {
                        $testemail = sql_select("MEMBRE", "emailMemb", "emailMemb = '$email'");
                        if ($testemail[0][0] == $email) {
                            $error = "L'adresse e-mail est déjà utilisée.";
                        } else {
                            sql_insert("MEMBRE", "pseudoMemb, nomMemb, prenomMemb, emailMemb, passMemb", "'$username', '$nom', '$prenom', '$email', '$password'");
                            $result = sql_insert("MEMBRE", "pseudoMemb, nomMemb, prenomMemb, emailMemb, passMemb, numStat", "'$username', '$nom', '$prenom', '$email', '$password', 3");
                            if ($result) {
                                session_start();
                                $_SESSION["username"] = $username;
                                header("location: ../../index.php");
                            } else {
                                $error = "Les identifiants sont invalides.";
                        }
                    }
                }
            }
        }
    }
}
        
    
?>

<div class="login-page">
    <div class="login-container">
        <h1>Inscription</h1>
        <div class="row g-0">
            <div class="col-md-12">
                <p>Vous avez déjà un compte ?<a href="login.php"> Se connecter</a></p>
            </div>
        </div>
        <?php if (isset($error)) {
            echo '<p class="error">' . $error . '</p>';
        } ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input class="pseudo" type="text" name="username" placeholder="Pseudo">
            <div class="row">
                <div class="col-md-6">
                    <input class="username" type="text" name="nom" placeholder="Nom">
                </div>
                <div class="col-md-6">
                    <input class="password" type="text" name="prenom" placeholder="Prénom">
                </div>
                <input class="username" type="email" name="email" placeholder="Adresse e-mail">
                <input class="password" type="password" name="password" placeholder="Mot de passe">
                <button class='bouton' name="submit" type="submit">Créer un compte</button>
        </form>
    </div>
</div>
</div>


<?php
include '../../footer.php';
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

    form {
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
        text-decoration: none;

    }

    .pseudo {
        width: 70%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .bouton {
        width: 45%;
        margin-left: 100px;

    }
</style>