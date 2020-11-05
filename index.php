<?php

require_once './functions/html.php';
require_once './functions/validators.php';
require_once './functions/form.php';

$form = [
    'fields' => [
        'email' => [
            'label' => 'Email:',
            'type' => 'text',
            'validators' => [
                'validate_field_not_empty',
            ],
            'extra' => [
                'attr' => [
                    'placeholder' => 'aurimas@aurimas',
                    'class' => 'input-field',
                ]
            ]
        ],
        'password' => [
            'label' => 'Password:',
            'type' => 'password',
            'extra' => [
                'attr' => [
                    'placeholder' => 'password',
                    'class' => 'input-field',
                ]
            ]
        ],
        'age' => [
            'label' => 'Age:',
            'type' => 'number',
            'extra' => [
                'attr' => [
                    'placeholder' => 'password',
                    'class' => 'input-field',
                ]
            ]
        ]
    ],
    'buttons' => [
        'login' => [
            'title' => 'Log in',
            'type' => 'submit',
            'extra' => [
                'attr' => [
                    'class' => 'btn',
                ]
            ]
        ],

    ]
];

$svarus_inputai = get_clean_input($form);

if ($svarus_inputai) {
    $is_valid = validate_form($form, $svarus_inputai);
}

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Forms</title>
    <style>
        .error {
            color: red;
            font-size: .8em;
        }

        input {
            display: block;
        }
    </style>
</head>
<body>
<form method="POST">
    <?php foreach ($form['fields'] as $input_name => $input): ?>
        <label>
            <span><?php print $input['label']; ?></span>
            <input <?php print input_attr($input_name, $input); ?>>

            <?php if (isset($input['error'])): ?>
                <p class="error"><?php print $input['error']; ?></p>
            <?php endif; ?>

        </label>
    <?php endforeach; ?>

    <?php foreach ($form['buttons'] as $button_id => $button): ?>
        <button <?php print button_attr($button_id, $button); ?>>
            <?php print $button['title']; ?>
        </button>
    <?php endforeach; ?>
</form>
</body>
</html>
