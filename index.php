<?php
$answer = '';
if (isset($_POST['name'])) {
    $name = trim($_POST['vardas']);

    if ($name === trim($name) && strpos($name, ' ')) {
        $answer = $name;
    } else {
        $answer = 'Vardas ir pavardė turi būti atskiri';
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
    <label for="weather">Įrašyk savo vardą ir pavardę:</label>
    <input type="text" name="vardas" placeholder="Vardas ir pavardė" required>
    <input type="submit" name="name" value="Tikrinti">
    <h2><?php print $answer; ?></h2>
</form>
</body>
</html>