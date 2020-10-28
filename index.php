<?php

$x = rand(1, 16);
$y = rand(1, 16);

function is_prime($number) {
    // Early exit
    if ($number === 1) {
        return false;
    }

    for ($i = 2; $i <= $number/2; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

function sum_if_prime($x, $y) {
    if (is_prime($x) && is_prime($y)) {
        return $x + $y;
    }

    return null;
}

function generate_answer($number) {
    if (is_prime($number)) {
        return "$number yra pirminis skaičius";
    } else {
        return "$number nėra pirminis skaičius";
    }
}

$answer_x = generate_answer($x);
$answer_y = generate_answer($y);

$sum = sum_if_prime($x, $y);

if ($sum) {
    $answer_sum = "Pirminių skaičių suma: $sum";
} else {
    $answer_sum = "Pirminių skaičių suma: --";
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Functions</title>
</head>
<body>
<p><?php print $answer_x; ?></p>
<p><?php print $answer_y; ?></p>
<p><?php print $answer_sum; ?></p>
</body>
</html>






