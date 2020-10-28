<?php

$names = [
    'beavis',
    'dZIGIS',
    'krakamule',
    'kontrimas',
    'BARTOLOMEJUS',
    'stase'
];

//ucwords — Uppercase the first character of each word in a string
//strtolower — Lowercase
function changed_names($names) {
    $changed = [];
    foreach ($names as $name) {
        $changed[] = ucwords(strtolower($name));
    }
    return $changed;
}
$x = changed_names($names);

var_dump($x);
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
