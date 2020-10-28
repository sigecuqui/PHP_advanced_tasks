<?php
$suits = ['cirvai', 'bugnai', 'vynai', 'kryziai'];
$cards = ['A', 'K', 'Q', 'J', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10'];

//sudaryti 56 kortas
function cards_block($suits, $cards) {
    $cards_many = [];
    foreach ($suits as $suit) {
        foreach ($cards as $card) {
            //priskirti suits prie suits, o cards prie cards
            $cards_many[] = [
                'suit' => $suit,
                'card' => $card
            ];
        }
    }
    return $cards_many;
}

$cards_deck = cards_block($suits, $cards);
var_dump($cards_deck);

function cards_on_table($array) {
    $five_cards = [];
    for ($i = 1; $i <= 5; ++$i) {
        $random_index = rand(0, count($array) - 1);
        $five_cards[] = $array[$random_index];
        array_splice($array, $random_index, 1);
    }
    return $five_cards;
}
$cards_on_table = cards_on_table($cards_deck);

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
<main>
    <h1></h1>
</main>
</body>
</html>
