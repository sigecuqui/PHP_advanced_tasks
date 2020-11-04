<?php

function weather_choice($weather_option)
{
    $message = '';
    switch ($weather_option) {
        case 'sunny':
            {
                $message = 'Pagaliau saulutė!';
            }
            break;
        case 'rainy':
            {
                $message = 'Geriau lįsk po pledu';
            }
            break;
        case 'snowing':
            {
                $message = 'Statom senį besmegenį?';
            }
            break;
        case 'overcast':
            {
                $message = 'Ajajajoooo cepelininis dangus';
            }
            break;
    }

    return $message;
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather</title>
    <style>
        form {
            margin: 0 auto;
            padding: 20px;
            width: 500px;
            display: flex;
            flex-direction: column;
            text-align: center;
            box-shadow: 0 2px 4px #444444;
            box-sizing: border-box;
        }

        label, button, select {
            margin: 20px 0;
            padding: 10px;
        }
    </style>
</head>
<body>

<form method="post">
    <label for="weather">Select the weather type today: </label>
    <select id="weather" name="weather">
        <option value="">--Make a choice--</option>
        <option value="sunny">Saulėta</option>
        <option value="rainy">Lietinga</option>
        <option value="snowing">Snigs</option>
        <option value="overcast">Debesuota</option>
    </select>
    <button type="submit">Submit</button>
    <?php if (!empty($_POST['weather'])): ?>
        <h3><?php print weather_choice($_POST['weather']); ?></h3>
    <?php else: ?>
        <h3>Pasirink variantą :)</h3>
    <?php endif; ?>
</form>

</body>
</html>

