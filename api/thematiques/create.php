<?php

require_once __DIR__ . '/../../config.php';

$libThem = $_POST['libThem'];

sql_insert('THEMATIQUE', 'libThem', "'$libThem'");

header('Location: ../../views/backend/thematiques/list.php');