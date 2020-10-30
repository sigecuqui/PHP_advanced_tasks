<?php
$array = ['s', 's', 'a', 'k', 'l', 'm', 'G', 'M', 'N', 'j', 'o', 'O'];

function count_values($array, $value) {
    $counting_values = 0;

    foreach ($array as $search) {
        if ($search === $value) {
            $counting_values++;
        }
    }
    return $counting_values;
}

var_dump(count_values($array, 's'));

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
