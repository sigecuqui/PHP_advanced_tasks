<?php

/**
 * Sukuria surodyto dydžio kvadratą.
 * @param $size integer Eilučių ir stulpelių kaičius.
 * @return array
 */
function generate_matrix($size) {
    $generated_array = [];

    for ($i = 0; $i < $size; $i++) {

        for ($j = 0; $j < $size; $j++) {
            $generated_array[$i][$j] = rand(0, 1);
        }
    }

    return $generated_array;
}

$matrix = generate_matrix(rand(2, 5));

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Functions</title>
    <style>
        div {
            display: flex;
        }
        span {
            width: 80px;
            height: 80px;
            margin: 5px;
        }
        .blue {
            background: darkcyan;
        }
        .gold {
            background: gold;
        }
    </style>
</head>
<body>
<?php foreach ($matrix as $row): ?>
    <div>
        <?php foreach ($row as $col): ?>
            <span class="<?php print $col ? 'blue' : 'gold'; ?>"></span>
        <?php endforeach; ?>
    </div>
<?php endforeach; ?>
</body>
</html>
