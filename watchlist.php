<?php
function sql_connect()
{
    global $DB;

    //connect with PDO using SQL_HOST, SQL_USER, SQL_PWD, SQL_DB
    $DB = new PDO('mysql:host=localhost;dbname=watchlist', 'root', 'root');
}

function sql_select($from, $attributs = '*', $where = null, $order = null, $limit = null) {
    global $DB;

    //connect to database
    if(!$DB) {
        sql_connect();
    }

    //prepare query for PDO
    $query = "SELECT " . $attributs . " FROM $from";
    if($where) {
        $query .= " WHERE $where";
    }
    if($order) {
        $query .= " ORDER BY $order";
    }
    if($limit) {
        $query .= " LIMIT $limit";
    }

    // var_dump($query);

    $result = $DB->query($query);

    $result = $result->fetchAll();

    if (!$result) {
        echo "\nPDO::errorInfo():\n";
        print_r($DB->errorInfo());
    }
    //return result
    return $result;
}

function sql_insert($from, $keys, $values) {
    global $DB;

    //connect to database
    if(!$DB) {
        sql_connect();
    }

    //prepare query for PDO
    $query = "INSERT INTO $from ($keys) VALUES ($values)";

    //execute query
    var_dump($query);
    $DB->query($query);
    $error = $DB->errorInfo();
    if($error[0] != 0) {
        echo "Error: " . $error[2];
    } else {
        return true;
    }
}

function sql_delete($from, $values) {
  global $DB;

  //connect to database
  if(!$DB) {
      sql_connect();
  }

  //prepare query for PDO
  $query = "DELETE FROM $from WHERE `id` = $values";

  //execute query
  var_dump($query);
  $DB->query($query);
  $error = $DB->errorInfo();
  if($error[0] != 0) {
      echo "Error: " . $error[2];
  } else {
      return true;
  }
}

$order = 1;
// sql_insert("films", 'titreFilm, dateFilm, descFilm, noteFilm', '"Test2", "2015-02-02", "Test2", 78');
$movies = sql_select("films", "*");
// sql_delete("films", 113);
/*
foreach($movies as $movie => $value) {
  echo "Titre : " . $value[1] . "<br>";
  echo "Synopsis : " . $value[3] . "<br>" ;
  echo "Date de sortie : " . $value[2] . "<br>";
  echo "Note des utilisateurs : " . $value[4] . "%" . "<br>";
  echo "Lien cover : " . $value[5] . "<br>";
  echo "<br>";
}
*/
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Watch-List</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="todo.css">

</head>

<body>
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container-fluid">
      <i class="bi bi-camera-reels-fill"></i>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="newFilm.html">Ajouter un film</a>
          </li>
        </ul>
        <form action="delete.php" method="post">
        <input type="number" name="id" id="id" placeholder="ID" required>
          <button class="btn btn-danger" type="submit">Supprimer</button>
        </form>
      </div>
    </div>
  </nav> 
  <div class="titre">
    <h1 class="text-center">NOTRE WATCH LIST</h1>
  </div>


<div class="galerie">
  <div class="container text-center">
    <div class="row align-items-start">
      <?php foreach ($movies as $movie => $value) : ?>
      <div class="col">
        <div class="card text-bg-dark mb-3" style="width: 18rem;">
          <img src="<?php echo $value[5] ?>" class="card-img-top" alt="..." widht=" 23px">
          <div class="card-body">
            <h5 class="card-title"><?php echo $value[1] ?></h5>
            <p class="card-text"><?php echo $value[3] ?></p>
            <p class="card-text"><strong>Date de sortie :</strong> <?php echo $value[2] ?></p>
            <p class="card-text"><strong>Note :</strong> <?php echo $value[4] ?>/100</p>
            <p class="card-text"><strong>ID :</strong> <?php echo $value[0] ?></p>
            <a href="#" class="btn btn-danger">Supprimer</a>
          </div>
        </div>
      </div>
      <?php if ($order == 3) :?>
        <?php $order = 1;?>
        <div class = "solo" ></div>
        <?php $order = 0;?>
      <?php endif; ?>

      <?php 
      if ($order != 3) {
        $order++;
      } ?>
      <?php endforeach; ?>

    </div>
  </div>
</div>
</div>
  </div>



</body>
</html>