<?php
$str = "20.3k 3.8k 7.7k 992";
$result = [];
$array = explode(" ", $str);
var_dump($array);
foreach ($array as $string) {
    $result[] = intval(str_replace([".", "k"], ["", "00"], $string));
}
var_dump($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cars</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header></header>
<main>

</main>
<footer></footer>
</body>
</html>