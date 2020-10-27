<?php
$suits = ['spades', 'diamonds', 'hearts', 'clubs'];
$cards = ['A', 'K', 'Q', 'J', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10'];
$deck = [];
foreach ($suits as $suit) {
    foreach ($cards as $card) {
        $deck[] = [
            'suit' => $suit,
            'card' => $card
        ];
    }
}
var_dump($deck);
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
<main>

</main>
<footer></footer>
</body>
</html>