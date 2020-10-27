<?php
$products = [
    [
        'name' => 'Stumbro Degtinėla',
        'price' => 6.49,
        'image' => 'https://images.kaina24.lt/6423/68/stumbras-vodka-simtmecio-1-l.jpg',
    ],
    [
        'name' => 'Balzamas',
        'price' => 9.50,
        'price_special' => 7.99,
        'image' => 'https://iki.lt/wp-content/uploads/alk/244784.jpg',
    ],
    [
        'name' => 'Naminukė',
        'price' => 5,
        'image' => 'https://images.kaina24.lt/6423/85/absolut-vodka-0-7-l.jpg',
    ],
    [
        'name' => 'Tekilukė',
        'price' => 10,
        'price_special' => 8,
        'image' => 'https://iki.lt/wp-content/uploads/alk/11496.jpg',
    ],
];

$discount = 0;

foreach ($products as $key => $product) {
    $products[$key]['in_stock'] = rand(0, 1);
}
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
            <article class="product">
                <h2 class="name"><?php print $products[$key]['name']; ?></h2>
                <?php if (array_key_exists('price_special', $product)): ?>
                    <h2 class="price_special">
                        <?php print '-' . $discount = round(100 - $product['price_special'] * 100 / $product['price']) . '%'; ?>
                    </h2>
                    <h2 class="price"><?php print $products[$key]['price_special'] . ' EUR'; ?></h2>
                <?php else: ?>
                    <h2 class="price"><?php print $products[$key]['price'] . ' EUR'; ?></h2>
                <?php endif; ?>
                <?php if ($products[$key]['in_stock']): ?>
                    <h3 class="in_stock">Yra sandėlyje</h3>
                    <img src="<?php print $products[$key]['image']; ?>" alt="drink">
                <?php else: ?>
                    <h3 class="out_of_stock">Nėra sandėlyje</h3>
                    <img class="grey" src="<?php print $products[$key]['image']; ?>" alt="drink">
                <?php endif; ?>
            </article>
        <?php endforeach; ?>
    </div>
</main>
</body>
</html>

