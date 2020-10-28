<?php
$suits = ['spades', 'diamonds', 'hearts', 'clubs'];
$cards = ['A', 'K', 'Q', 'J', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10'];

function cards_five($suits, $cards) {
    $five_cards = [];
    foreach ($suits as $suit) {
        foreach ($cards as $card) {
            $five_cards[] = [
                'suit' => $suit,
                'card' => $card
            ];
        }
    }
    return $five_cards;
}
$deck = cards_five($suits, $cards);

var_dump($deck);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Functions</title>
</head>
<body>
</body>
</html>
