<?php
$day = '';
$answer = '';

if (isset($_POST['day'])) {
    $day = date('N', strtotime('+1 day'));
    switch ($day) {
        case 1:
            $answer ="Pirmadienis";
            break;
        case 2:
            $answer = "Antradienis";
            break;
        case 3:
            $answer ="Trečiadienis";
            break;
        case 4:
            $answer ="Ketvirtadienis";
            break;
        case 5:
            $answer ="Penktadienis";
            break;
        case 6:
            $answer ="Šeštadienis";
            break;
        case 7:
            $answer ="Sekmadienis";
            break;
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
    <title>Weekday</title>
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
    <button type="submit" name="day">Spausdinti dieną</button>
   <?php if (isset($_POST['day'])): ?>
    <h2><?php print $answer; ?></h2>
    <?php endif; ?>
</form>
</body>
</html>