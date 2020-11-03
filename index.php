<?php
$description = '';
$name = '';
$surname = '';
$age = '';
$level = '';
$year = '';

if (isset($_POST['submit'])) {
    if ($_POST['submit'] === 'PATEIKTI') {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $age = $_POST['age'];
        $year = 2020 - (int)$age;
        $level = $_POST['level'];
        $description = "$name, gimęs(-usi) $year, yra $level PHP programuotojas.";
        $_POST['form'] = '';
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
    <title>Forma</title>
    <style>
    </style>
</head>
<body>
<main>
    <?php if (isset($_POST['submit'])): ?>
        <div class="block">
            <p>Vardas: <?php print $name; ?></p>
            <p>Pavardė: <?php print $surname; ?></p>
            <p>Amžius: <?php print $age; ?></p>
            <p>Lygis: <?php print $level; ?></p>
            <p class="description"><?php print $description; ?></p>
        </div>
    <?php else: ?>
        <h1>Užpildyk formą:</h1>
        <form method="POST" name="form">
            <input type="text" name="name" placeholder="Vardas">
            <input type="text" name="surname" placeholder="Pavardė">
            <input type="number" name="age" placeholder="Amžius">
            <label id="options">Kaip vertini savo PHP žinias?</label>
            <select name="level" id="options">
                <option value="prastas">Prastai</option>
                <option value="neblogas">Neblogai</option>
                <option value="puikus">Puikiai</option>
            </select>
            <input type="submit" name="submit" value="PATEIKTI">
        </form>
    <?php endif; ?>
</main>
</body>
</html>