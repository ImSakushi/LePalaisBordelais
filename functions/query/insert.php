<?php


function sql_insert($from, $keys, $values) {
    global $DB;

    //connect to database
    if(!$DB) {
        sql_connect();
    }

    //prepare query for PDO
    $query = "INSERT INTO $from ($keys) VALUES ($values)";
    //echo $query . "<br>"; //debug

    //execute query
    $DB->query($query);
    $error = $DB->errorInfo();
    if($error[0] != 0) {
        echo "Error: " . $error[2];
    } else {
        return true;
    }
}