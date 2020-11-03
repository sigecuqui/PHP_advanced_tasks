<?php
$numbers_array = [838, 121, 344, 555, 768, 878, 987, 345, 565];

function palindromes(&$array) {
    foreach ($array as $index => &$value) {
        $reverse = intval(strrev($value));
        if ($value !== $reverse) {
            array_splice($array, $index, 1);
        }
    }
}

palindromes($numbers_array);
var_dump($numbers_array);
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
<main>
</main>
</body>
</html>