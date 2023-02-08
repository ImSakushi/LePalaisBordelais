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
  <link rel="stylesheet" href="header.css">
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
                  <a class="navbar-brand" href="#">
                    <img src="Capture d’écran 2023-02-07 à 10.31.32.png" alt="logo" width="50" height="50" class="img">
                  </a>
                </div>
              </nav>
        
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                 <a class="nav-link active text-white" class="archi" aria-current="page" href="#">Archives      </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#" >Recommandation     </a>  
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Recettes
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#"></a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul> 
              </li>
              <li class="nav-item">
                <a class="nav-link disabled text-white">Histoire       </a>
              </li>
            </ul>
            <form class="d-flex text-white" role="search">
              <input class="form-control me-2" type="search" placeholder="Recherche..." aria-label="search">
              <button class="btn btn-outline-success" type="submit">Connexion </button>
            </div>
            </form>
          </div>
        </div>
    </div>
  </nav>
</body>

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