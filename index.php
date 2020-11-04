<?php
//var_dump($_POST);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tree</title>
    <style>
        .wrapper {
            text-align: center;
        }
        form {
            margin-bottom: 50px;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <form method="POST">
        <label for="enter_number">Enter number:</label>
        <input type="text" id="enter_number" name="number">
        <button type="submit">Enter!</button>
    </form>
    <?php if (isset($_POST['number']) && is_numeric($_POST['number']) && $_POST['number'] > 1) : ?>
        <?php for ($x = 1; $x <= $_POST['number']; $x++): ?>
            <?php for ($y = 1; $y <= $x; $y++): ?>
                <span>*</span>
            <?php endfor; ?>
            <br>
        <?php endfor; ?>
    <?php else: ?>
        <div style="color: #8b0000;">Please enter number which is more than 1</div>
    <?php endif; ?>
</div>
</body>
</html>
