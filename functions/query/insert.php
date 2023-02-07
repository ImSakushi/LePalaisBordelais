<?php

function sql_insert($from, $keys, $values) {
    global $DB;

    //connect to database
    if(!$DB) {
        sql_connect();
    }

    //array from values
    if(!is_array($values)) {
        $values = array($values);
        //check if is string with quotes and remove them for each value
        foreach($values as $key => $val) {
            if(substr($val, 0, 1) == "'" && substr($val, -1) == "'") {
                $values[$key] = substr($val, 1, -1);
            }
        }
    }
    //escape values
    $values = sql_escape($values);
    //string from values
    $values = "'" . implode("', '", $values) . "'";

    //build query
    $query = "INSERT INTO $from ($keys) VALUES ($values)";

    //execute query
    $DB->query($query);
    $error = $DB->errorInfo();
    if($error[0] != 0) {
        echo "Error: " . $error[2];
    } else {
        return true;
    }
}
