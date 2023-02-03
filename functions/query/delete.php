<?php

function sql_delete($from, $where) {
    global $DB;

    //connect to database
    if(!$DB) {
        sql_connect();
    }

    //prepare query for PDO
    $query = "DELETE FROM $from WHERE $where";

    //execute query
    $DB->query($query);
    $error = $DB->errorInfo();
    if($error[0] != 0) {
        echo "Error: " . $error[2];
    } else {
        return true;
    }
}