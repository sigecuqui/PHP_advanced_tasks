<?php
$email = isset($_POST['email']) ? $_POST['email'] : '';

$form = [
    'email' => [
        'label' => 'Email',
        'type' => 'text',
        'placeholder' => 'Sigis@gmail.com'
    ],
    'password' => [
        'label' => 'Password',
        'type' => 'password',
        'placeholder' => 'Your password...'
    ]
];

function get_clean_input($form) {
    $parameters = [];
    foreach ($form as $index => $input) {
        $parameters[$index] = FILTER_SANITIZE_SPECIAL_CHARS;
    }
    return filter_input_array(INPUT_POST, $parameters);
}

$svarus_inputai = get_clean_input($form);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Forma</title>

</head>
<body>
<main>

    <form method="post">
        <?php foreach ($form as $input_name => $input): ?>
            <label><?php print $input['label']; ?>
                <input name="<?php print $input_name; ?>" type="<?php print $input['type']; ?>>"
                       placeholder="<?php print $input['placeholder']; ?>">
            </label>
        <?php endforeach; ?>
        <button name="button">Login</button>
    </form>

</main>
</body>
</html>