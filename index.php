<?php

$answer = '';

if (isset($_POST['age'])) {
    if ((int)$_POST['age'] >= 18 && (int)$_POST['age'] <= 26 && $_POST['teistumas'] === 'neteistas') {
        $answer = 'Jūs esate šaukiamas į kariuomenę';
    } else {
        $answer = 'Jūs nesate šaukiamas į kariuomenę';
    }
} else {
    $answer = 'Įveskite amžių';
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kariuomene</title>
    <style>
        form {
            margin: 0 auto;
            padding: 20px;
            width: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            box-shadow: 0 2px 4px #444444;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
<form method="post">
    <label for="weather">Provide your age:</label>
    <input type="number" name="age" placeholder="Amžius" required>
    Teistas
    <input type="radio" value="teistas" name="teistumas">
    Neteistas
    <input type="radio" value="neteistas" name="teistumas">
    <button type="submit">Submit</button>
<h2><?php print $answer; ?></h2>
</form>
</body>
</html>

