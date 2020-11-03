<?php
$value = 0;
$size = 50;

if (isset($_POST['button'])) {
    $value = (int)$_POST['button'] + 1;
    $size = (int)$_POST['button'] * 10;
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
    <title>Banana</title>
    <style>
        img {
            width: <?php print $size; ?>px;
        }
    </style>
</head>
<body>
<main>
    <form method="post">
        <button name="button" value="<?php print $value; ?>"><?php print $value; ?></button>
        <img src="https://i1.wp.com/freepngimages.com/wp-content/uploads/2015/11/banana-transparent-background.png?fit=600%2C300"
             alt="banana">
    </form>
</main>
</body>
</html>