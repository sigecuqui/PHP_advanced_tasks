<?php

function generate_matrix($size) {
    $generated_array = [];

    for ($i = 0; $i < $size; $i++) {

        for ($j = 0; $j < $size; $j++) {
            $generated_array[$i][$j] = rand(0, 1);
        }
    }

    return $generated_array;
}

var_dump(generate_matrix(2));

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

</body>
</html>





