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
  <header>
    <div class="leftheader">
      <img src="/source/images/logo.svg" alt="logo du palais bordelais" class="logo">
      <div class="textleftheader">
        <a href="/index.php" class="headertitre">LE PALAIS BORDELAIS</a>
        <a href="/archives.php" class="headertext">Archives</a>
        <a href="/views/backend/dashboard.php" class="headertext">Recommandations</a>
        <a href="#" class="headertext">Recettes</a>
        <a href="#" class="headertext">Histoires</a>
      </div>
    </div>
    <div class="button-emplacement">
      <div class="dark-mode-container">
        <button type="button" class="btn-dark-mode">
          <img src="/source/images/ampoule-off.svg" id="ampoule" alt="ampoule dark mode">
        </button>
      </div>
      <div class="search-container">
        <button type="button" class="btn-search">
          <img src="/source/images/Recherche.svg" alt="bouton recherche" style="width: 2.625rem; height: 2.625rem; object-fit: cover;">
        </button>
        <input type="text" class="search-bar">
      </div>
      <?php
      if (isset($_SESSION['username']) && $_SESSION['username'] !== "") {
        $user = $_SESSION['username'];
        echo '<button onclick="window.location.href=\'/views/backend/logout.php\';" type="button" class="btn btn-outline-danger btn-lg">Déconnexion</button>';
      } else {
        echo '<button onclick="window.location.href=\'/views/backend/login.php\';" type="button" class="btn btn-outline-danger btn-lg">Connexion</button>';
      }
      ?>

    </div>
  </header>

  <script>
    const searchBtn = document.querySelector('.btn-search');
    const searchBar = document.querySelector('.search-bar');
    const ampouleBtn = document.querySelector('.dark-mode-container');
    const footer = document.querySelector('footer');
    const ampouleImg = document.querySelector('#ampoule');



    searchBtn.addEventListener('click', function() {
      searchBar.classList.toggle('active');
      ampouleBtn.classList.toggle('active');
    });


    ampouleBtn.addEventListener('click', function() {
      if (ampouleImg.getAttribute("src") == "/source/images/ampoule-off.svg") {
        ampouleImg.setAttribute("src", "/source/images/ampoule-on.svg");
      } else {
        ampouleImg.setAttribute("src", "/source/images/ampoule-off.svg");
      }
      document.body.classList.toggle('dark-mode');
      footer.classList.toggle('dark-mode');
      document.querySelectorAll("body *").forEach(function(el) {
        el.style.color = "white";
      });
    });
  </script>