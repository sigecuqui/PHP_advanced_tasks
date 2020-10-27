<?php
$x = 2;
$y = 10;
function sum($x, $y) {
    return $x + $y;
}

$sum = sum($x, $y);

var_dump($x);
$h1 = "$x ir $y suma: $sum";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Functions</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
</style>
<body>
<main>
    <h1><?php print $h1; ?></h1>
</main>
</body>
</html>

