<?php
$width = 50;
$value = 0;

if (isset($_POST['button'])) {
    $value = (int)$_POST['rangeBanana'];
    $width = $value * 10;
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
    <title>Forms</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
        }

        input, button {
            width: 300px;
        }
    </style>
</head>
<body>
<main>
    <form method="post">
        <input type="range" min="1" max="100" value="<?php print $value; ?>" class="slider" name="rangeBanana">
        <button type="submit" name="button">Submit</button>
    </form>
    <img style="width: <?php print $width; ?>px"
         src="https://i1.wp.com/freepngimages.com/wp-content/uploads/2015/11/banana-transparent-background.png?fit=600%2C300"
         alt="banana">
</main>
</body>
