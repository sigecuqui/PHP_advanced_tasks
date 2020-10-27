<?php
$cars = [
    [
        'brand' => 'Lada',
        'model' => 'Kalina',
        'image' => 'https://i1.wp.com/bestsellingcarsblog.com/wp-content/uploads/2010/12/lada-kalina-russia-nov-2010b.jpg?fit=800%2C400&ssl=1',
        'year' => 2010,
        'price' => rand(1000, 3000),
        'on_sale' => rand(0, 1)
    ],
    [
        'brand' => 'Lada',
        'model' => 'Priora',
        'image' => 'https://lh3.googleusercontent.com/proxy/GkIz-4QO6PrhX8zhOljnLIwdTLQdWOX8L1zpfS5kiqyAUm9gu2Gsc9RrnikHDN2l0BqPsAMeE9xwd1aaeMdo7yHuP5qmZL_d665BAMlYbVf1iQjxx4mweRKXsmgeQp64uqHz8A2PwDI7pqL-Qwzw1NDS9d4or-ITD_3L3oWrDz8CSEM05fZUVyb7iJgff01ra872',
        'year' => 2016,
        'price' => rand(1000, 3000),
        'on_sale' => rand(0, 1)
    ],
    [
        'brand' => 'Lada',
        'model' => 'Granta',
        'image' => 'https://avtotachki.com/wp-content/uploads/2020/04/lada_granta_1.jpg',
        'year' => 2018,
        'price' => rand(1000, 3000),
        'on_sale' => rand(0, 1)
    ],
    [
        'brand' => 'Zaporožietis',
        'model' => 'ZAZ-965',
        'image' => 'https://s1.15min.lt/images/photos/2012/11/23/original/zaz-965-50af8aab3d795.jpg',
        'year' => 1960,
        'price' => rand(1000, 3000),
        'on_sale' => rand(0, 1)
    ],
    [
        'brand' => 'Zaporožietis',
        'model' => 'ZAZ-966',
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/3/32/ZAZ-966_in_Scharfenstein._June_1993.jpg',
        'year' => 1967,
        'price' => rand(1000, 3000),
        'on_sale' => rand(0, 1)
    ],
    [
        'brand' => 'Moskvič',
        'model' => '2140',
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3b/Moskvitch2140.JPG/1280px-Moskvitch2140.JPG',
        'year' => 1985,
        'price' => rand(1000, 3000),
        'on_sale' => rand(0, 1)
    ],
    [
        'brand' => 'Moskvič',
        'model' => '400',
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/2/2f/Moskvitch.jpg',
        'year' => 1947,
        'price' => rand(1000, 3000),
        'on_sale' => rand(0, 1)
    ],

];

shuffle($cars);

$cars_by_brand = [];
$cars_brand = 'Lada';

foreach ($cars as $car_brands) {
    if ($car_brands['brand'] == $cars_brand) {
        $cars_by_brand[] = $car_brands;
    }
}

$cars_by_price = [];
$cars_price = 2000;

foreach ($cars as $car_price) {
    if ($car_price['price'] <= $cars_price) {
        $cars_by_price[] = $car_price;
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cars</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header></header>
<main class="container">
    <div class="cards"><?php foreach ($cars_by_price as $car): ?>
            <div class="card">
                <img class="image" src="<?php print $car['image']; ?>">
                <h2><?php print $car['brand'] . ' ' . $car['model'] ?></h2>
                <h3><?php print 'Metai' . ' ' . $car['year'] ?></h3>
                <?php if ($car['on_sale']): ?>
                    <h3 class="green"><?php print 'Kaina' . ' ' . $car['price'] . ' eur' ?></h3>
                <?php else: ?>
                    <h3 class="red">SOLD OUT</h3>
                <?php endif ?>
            </div>
        <?php endforeach; ?>
    </div>
</main>
<footer></footer>
</body>
</html>