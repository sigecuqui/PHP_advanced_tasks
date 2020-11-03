<?php
$answer = '';

function square(&$answer) {
    if (isset($_POST['number'])) {
        if (is_numeric($_POST['number'])) {
            $answer = $_POST['number'] * $_POST['number'];
        } else {
            $answer = 'Please enter a number';
        }
    }
}

square($answer);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Forma</title>
</head>
<body>
<main>
    <form method="post">
            <input name="number" type="text">
            <button type="submit" name="button">Submit</button>
            <p><?php print $answer; ?></p>
    </form>
</main>
</body>
</html>