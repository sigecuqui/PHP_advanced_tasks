<?php
$sentence = 'vagi vagi vagi na';

function change(&$sentence) {
    $str_implode = str_split($sentence);

    $caps = true;

    foreach ($str_implode as $key => $letter) {
        if ($caps) {
            $out = strtoupper($letter);
            if ($out !== " ") //not a space character
                $caps = false;
        } else {
            $out = strtolower($letter);
            $caps = true;
        }
        $str_implode[$key] = $out;
    }

    $sentence = implode('', $str_implode);
}
change($sentence);
var_dump($sentence);
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