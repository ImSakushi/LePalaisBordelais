<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Le palais bordelais</title>
  <!-- Bootstrap CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous" defer></script>
  <!-- Load CSS -->
  <link rel="stylesheet" href="/source/css/style.css">
  <link rel="stylesheet" href="/source/css/reset.css">
  <!-- Load JS scripts -->
  <script src="/source/js/script.js" defer></script>
</head>
<?php
//load config
require_once 'config.php';
session_start();

//load php scripts
?>

<body>
  <nav class="navbar-default">
    <nav class="navbar navbar-expand-lg -body-tertiary" style="background-color: rgb(92, 25, 25);">
        <div class="container-fluid">
            <nav class="navbar -body-tertiary">
                <div class="container">
                  <a class="navbar-brand" href="/index.php">
                    <img src="/source/images/logo.svg" alt="logo" width="50" height="50" class="img">
                  </a>
                </div>
              </nav>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="align-items: center;">
            <li class="nav-item">
                 <a class="nav-link active text-white headertitre" class="archi" aria-current="page" href="/index.php">LE PALAIS BORDELAIS</a>
              </li>
              <li class="nav-item">
                 <a class="nav-link active text-white headertext" class="archi" aria-current="page" href="/archives.php">Archives</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white headertext" class="archi" aria-current="page" href="/views/backend/dashboard.php" >Recommandation</a>  
              </li>
              <li class="nav-item dropdown">
              <a class="nav-link active text-white headertext" class="archi" aria-current="page" href="#">
                  Recettes
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white headertext" class="archi" aria-current="page" href="#">Histoire</a>
              </li>
            </ul>
            <form class="d-flex text-white" role="search">
              <input class="form-control me-2 searchbar" type="search" placeholder="Recherche..." aria-label="search">
              <?php
              if (isset($_SESSION['username']) && $_SESSION['username'] !== "") {
              $user = $_SESSION['username'];
              echo '<button onclick="window.location.href=\'/views/backend/logout.php\'" type="button" class="btn btn-outline-danger btn-lg">Déconnexion</button>';
            } else {
              echo '<button onclick="window.location.href=\'/views/backend/login.php\'" type="button" class="btn btn-outline-danger btn-lg">Connexion</button>';
            }
            ?>
            </div>
            </form>
          </div>
        </div>
    </div>
  </nav>
</body>
</html>

<style>


.btn-outline-success {
    background-color:rgb(92, 25, 25);
    color: white;
    border: 1px solid black;
}

.btn-outline-success:hover{
  background-color: white;
  color: black;
  border: 2% black;
}
    
.btn-lg {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}

.searchbar{
    background-color:rgb(37, 11, 11);
}
.searchbar::placeholder{
    color: white;
}
.searchbar{

        -moz-border-radius: 40px;
        -webkit-border-radius: 40px;
        border-radius: 40px;       
}
.navbar-toggler{
    background-color: white;
}
</style>