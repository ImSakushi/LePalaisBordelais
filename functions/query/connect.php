<?php

//mysqli connection
function sql_connect() {
    global $DB;

    //connect with PDO using SQL_HOST, SQL_USER, SQL_PWD, SQL_DB
    $DB = new PDO('mysql:host=' . SQL_HOST . ';dbname=' . SQL_DB, SQL_USER, SQL_PWD);
}