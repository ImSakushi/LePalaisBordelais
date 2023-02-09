<?php require_once 'header.php'; 
sql_connect();

print_r(curl("https://reqres.in/api/users", "POST", '{"name": "morpheus", "job": "leader"}'));
?>


<?php require_once 'footer.php'; ?>