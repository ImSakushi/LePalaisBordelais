<?php
session_start();

require_once __DIR__ . '/../../config.php';
include '../../views/backend/check_access.php';

$numCom = $_GET['numCom'];
sql_delete('COMMENT', "numCom = $numCom");

header('Location: ../../views/backend/comments/list.php');