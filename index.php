<?php
$house = [];

for ($i = 0; $i < 5; $i++) {
    $house[] = 'namas su elektra';
}

foreach ($house as $key => $change) {
    $house[$key++] = &$change;
}

$house[3] = 'dingo elektra';

var_dump($house);
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
