<?php

$x = rand(0, 100);

function is_prime($number) {
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

$answer = is_prime($x);

if ($answer) {
    $h1 = "$x yra pirminis skaičius";
} else {
    $h1 = "$x nėra pirminis skaičius";
}

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
<h1><?php print $h1; ?></h1>
</body>
</html>







