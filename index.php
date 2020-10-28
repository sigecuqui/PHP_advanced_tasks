<?php

$x = rand(0, 100);
$y = rand(0, 100);

function is_prime($number)
{
//    Early exit
    if ($number === 1) {
        return false;
    }

    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}


if (is_prime($x)) {
    $p1 = "$x yra pirminis skaičius";
} else {
    $p1 = "$x nėra pirminis skaičius";
}

if (is_prime($y)) {
    $p2 = "$y yra pirminis skaičius";
} else {
    $p2 = "$y nėra pirminis skaičius";
}

function sum_if_prime($x, $y) {
    if (is_prime($x) && is_prime($y)) {
        return $x + $y;
    }
}

$sum = sum_if_prime($x, $y);
$p3 = "Pirm. sk. suma: $sum";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="style.css?<?php print time(); ?>">
    <title>Functions</title>
</head>
<body>
<p><?php print $p1; ?></p>
<p><?php print $p2; ?></p>
<p><?php print $p3; ?></p>
</body>
</html>







