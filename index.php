<?php
$atsakymas = '';
if (isset($_POST['submit'])) {
    if ($_POST['submit'] === 'kelti') {
        $sum = $_POST['number']*$_POST['number'];
        $atsakymas = $sum;
    }
    if($_POST['submit'] === 'saknis'){
        $sum = sqrt($_POST['number']);
        $atsakymas = $sum;
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
    </style>
</head>
<body>
<h1><?php print $atsakymas; ?></h1>
<form method="POST">
    <input type="number" name='number'>
    <input type="submit" name='submit' value = 'kelti'>
    <input type="submit" name='submit' value = 'saknis'>
</form>
</body>
</html>
