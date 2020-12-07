<h1><?php print $data['title']; ?></h1>
<section class="product__section">
    <?php foreach ($data['products'] as $product): ?>
        <div>
            <img src="<?php print $product['image']; ?>" alt="item image">
            <div>
                <h3><?php print $product['name']; ?></h3>
                <p><?php print $product['price']; ?> EUR</p>
            </div>
        </div>
    <?php endforeach; ?>
</section>