<?php
$products = [
    [
        'name' => 'Stumbro Degtinėla',
        'price' => 6.49,
        'image' => 'https://images.kaina24.lt/6423/68/stumbras-vodka-simtmecio-1-l.jpg'
    ],
    [
        'name' => 'Balzamas',
        'price' => 9.50,
        'price_special' => 7.99,
        'image' => 'https://iki.lt/wp-content/uploads/alk/244784.jpg'
    ],
    [
        'name' => 'Naminukė',
        'price' => 5,
        'image' => 'https://images.kaina24.lt/6423/85/absolut-vodka-0-7-l.jpg'
    ],
    [
        'name' => 'Tekilukė',
        'price' => 10,
        'price_special' => 8,
        'image' => 'https://iki.lt/wp-content/uploads/alk/11496.jpg'
    ],
];

$discount = 0;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gėrimukai</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
</style>
<body>
<main>
    <h1>Drink Catalogue</h1>
    <div class="products_card">
        <?php foreach ($products as $key => $product): ?>
            <div class="product">
                <img src="<?php print $products[$key]['image']; ?>" alt="drink">
                <?php if (array_key_exists('price_special', $product)): ?>
                    <h2 class="price_special">
                        <?php print '-' . $discount = round(100 - $product['price_special'] * 100 / $product['price']) . '%'; ?>
                    </h2>
                    <h2 class="price"><?php print $products[$key]['price_special'] . ' EUR'; ?></h2>
                <?php else: ?>
                    <h2 class="price"><?php print $products[$key]['price'] . ' EUR'; ?></h2>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</main>
</body>
</html>

