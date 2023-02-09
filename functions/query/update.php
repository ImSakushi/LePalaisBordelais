<?php


function sql_update($from, $set, $where) {
    global $DB;

    //connect to database
    if(!$DB) {
        sql_connect();
    }

    //prepare query for PDO
    $query = "UPDATE $from SET $set WHERE $where";
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

// function sql_update($from, $set, $where)
// {
//     global $DB;

//     //connect to database
//     if (!$DB) {
//         sql_connect();
//     }

//     $set = explode(',', $set);
//     $setArray = array();
//     foreach ($set as $key => $val) {
//         $val = explode('=', $val);
//         $setArray[trim($val[0])] = trim($val[1]);
//     }

//     //check if is string with quotes and remove them for each value
//     foreach ($setArray as $key => $val) {
//         if (substr($val, 0, 1) == "'" && substr($val, -1) == "'") {
//             $setArray[$key] = substr($val, 1, -1);
//         }
//     }
//     $set = $setArray;
//     //escape each values from set array
//     $set = sql_escape($set);
//     //string from set array
//     $setArray = array();
//     foreach ($set as $key => $val) {
//         $setArray[] = "$key = '$val'";
//     }
//     $set = implode(', ', $setArray);



//     //prepare query for PDO
//     $query = "UPDATE $from SET $set WHERE $where";
//     echo $query . "<br>" . "<br>"; //debug
//     //execute query
//     $DB->query($query);
//     $error = $DB->errorInfo();
//     if ($error[0] != 0) {
//         echo "Error: " . $error[2];
//     } else {
//         return true;
//     }
// }