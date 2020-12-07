<?php

use App\App;
use App\Views\BasePage;
use App\Views\Forms\Admin\AddForm;
use App\Views\Navigation;

require '../../bootloader.php';

$nav = new Navigation();

$form = new AddForm();


if ($form->validate()) {
    $clean_inputs = $form->values();
    $email  = $_SESSION['email'] ;
    $items= App::$db->insertRow('items', $clean_inputs + ['email' => $email]);
}

$page = new BasePage([
        'title' => 'Add',
        'content' => $form->render(),
    ]
);

print $page->render();

