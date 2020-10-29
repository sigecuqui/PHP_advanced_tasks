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

function get_winning_rows($matrix) {
    $winning_rows = [];

    foreach ($matrix as $key => $row) {
        $column_sum = count($row);
        $color_sum = 0;

        foreach ($row as $column) {
            $color_sum += $column;
        }

        if ($color_sum === 0 || $column_sum === $color_sum) {
            $winning_rows[] = $key;
        }
    }

    return $winning_rows;
}

$matrix = generate_matrix(3);


var_dump(get_winning_rows($matrix));

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
            <?php if ($col === 1): ?>
                <span class="blue"></span>
            <?php else: ?>
                <span class="gold"></span>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
<?php endforeach; ?>
</body>
</html>
