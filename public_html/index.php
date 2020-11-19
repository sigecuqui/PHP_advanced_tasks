<?php

require '../bootloader.php';

$db_data = file_to_array(DB_FILE);

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="index__body">
<?php include(ROOT . '/core/templates/nav.php'); ?>
<main>
    <h1>WELCOME TO BBZ SHOP!</h1>
    <section class="product__section">
        <?php foreach ($db_data['items'] as $item): ?>
            <div class="item">
                <img src="<?php print $item['image']; ?>" alt="image">
                <div class="product_bottom">
                    <h3><?php print $item['name']; ?></h3>
                    <p><?php print $item['price']; ?> EUR</p>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
</main>
</body>
</html>

