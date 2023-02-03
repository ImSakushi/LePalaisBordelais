<?php

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

    $result = $DB->query($query);
    $error = $DB->errorInfo();
    if($error[0] != 0) {
        echo "Error: " . $error[2];
    } else {
        $result = $result->fetchAll();
    }

    if (!$result) {
        $result = array();
    }

    //return result
    return $result;
}