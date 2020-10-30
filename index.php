<?php
$array = ['s', 's', 'a', 'k', 'l', 'm', 'G', 'M', 'N', 'j', 'o', 'O'];

function change_values(&$array, $from, $to) {

    foreach ($array as &$value) {
        if ($value === $from) {
            $value = $to;
        }
    }
}

change_values($array, 's', 'S');
var_dump($array);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Functions</title>
</head>
<body>

</body>
</html>
