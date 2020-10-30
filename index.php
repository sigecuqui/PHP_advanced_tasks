<?php
$movies = [
    [
        'image' => 'https://upload.wikimedia.org/wikipedia/en/0/03/Leon-poster.jpg',
        'name' => 'Leon: The Professional',
        'kurejas' => 'Luc Besson',
        'metai' => 1994,
        'zanras' => ['Veiksmo', 'Drama'],
        'aktoriai' => ['Natalie Portman', 'Jean Reno', 'Gary Oldman']
    ],
    [
        'image' => 'https://m.media-amazon.com/images/M/MV5BM2MyNjYxNmUtYTAwNi00MTYxLWJmNWYtYzZlODY3ZTk3OTFlXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_UY1200_CR107,0,630,1200_AL_.jpg',
        'name' => 'The Godfather',
        'kurejas' => 'Francis Ford Coppola',
        'metai' => 1972,
        'zanras' => ['Kriminalinis', 'Drama'],
        'aktoriai' => ['Al Pacino', 'Marlon Brando', 'James Caan']
    ],
    [
        'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/b/b7/Girl%2C_Interrupted_%281999%29.png/220px-Girl%2C_Interrupted_%281999%29.png',
        'name' => 'Girl, Interrupted',
        'kurejas' => 'James Mangold',
        'metai' => 1999,
        'zanras' => ['Drama'],
        'aktoriai' => ['Angelina Jolie', 'Winona Ryder', 'Brittany Murphy']
    ],
];

function filter($movies, $year) {
    $filtered_list = [];
    foreach ($movies as $value) {
        if ($value['metai'] > $year) {
            $filtered_list[] = $value;
        }
    }
    return $filtered_list;
}

$movie_filter = filter($movies, 1990);

function add_name(&$movies, $movie, $actors) {
    foreach ($movies as &$value) {
        if ($value['name'] === $movie) {
            $value['aktoriai'][] = $actors;
        }
    }
}

add_name($movies, 'Leon: The Professional', 'Sige Gige');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
    </style>
</head>
<body>
<main>
    <?php foreach ($movies as $movie): ?>
        <article class="movie_card">
            <img src="<?php print $movie['image']; ?>" alt="image">
            <h2><?php print $movie['name']; ?></h2>
            <h3><?php print $movie['kurejas']; ?></h3>
            <h3><?php print $movie['metai']; ?></h3>
            <h3><?php print implode(', ', $movie['zanras']); ?></h3>
            <ul>
                <li><?php print implode(', ', $movie['aktoriai']); ?></li>
            </ul>
        </article>
    <?php endforeach; ?>
</main>
</body>
</html>
