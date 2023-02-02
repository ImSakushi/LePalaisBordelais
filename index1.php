<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);


function curl($url, $type, $data = null, $headers = null) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $type);
    if ($data) {
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }
    if ($headers) {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    }
    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    return $result;
}

$test = json_decode(curl('https://blague.xyz/api/joke/random', 'GET'), true);

// echo($test['joke']['question'] . "<br>");
// echo($test['joke']['answer']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Générateur de blague</title>
</head>
<body>
    <h1>La blague de ouf du jour :</h1>
    <h2><?php echo($test['joke']['question'] . "<br>"); echo($test['joke']['answer']); ?></h2>
</body>
</html>