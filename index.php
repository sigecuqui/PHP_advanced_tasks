<?php

function deck() {
    $cards = ['A', 'K', 'Q', 'J', 10, 9, 8, 7, 6, 5, 4, 3, 2, 1];
    $type = ['Clubs', 'Diamonds', 'Hearts', 'Spades'];
    $card_deck = [];
    foreach ($cards as $keys => $card) {
        foreach ($type as $key => $kind) {
            $card_deck[] = [
                'type' => $kind,
                'card' => $card
            ];
        }
    }
    return $card_deck;
}
$card_deck = deck();

function draw_card($deck) {
    $five_cards = [];
    for ($i = 1; $i <= 5; $i++) {
        $card_name = rand(0, count($deck) - 1);
        $five_cards[] = $deck[$card_name];
        array_splice($deck, $card_name, 1);
    }
    return $five_cards;
}
$cards_on_table = draw_card($card_deck);

function check($cards_on_table) {
    foreach ($cards_on_table as $check) {
        if (strpos($check['type'], $check['type'])) {
            return 'Yes';
        } else return 'No';
    }
}

$answer = check($cards_on_table)
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Functions</title>
</head>
<body>
<section>
    <?php foreach ($cards_on_table as $on_table): ?>
        <div class="card <?php print $on_table['type']; ?>"><?php print $on_table['type']; ?>
            <h2><?php print $on_table['card']; ?></h2>
        </div>
    <?php endforeach; ?>
</section>
<h3>Is it flush?: <?php print $answer; ?></h3>
</body>
</html>
