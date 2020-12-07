<?php

use App\App;
use App\Views\BasePage;
use App\Views\Forms\RegisterForm;
use App\Views\Navigation;

require '../bootloader.php';

$nav = new Navigation();
$form = new RegisterForm();


if ($form->validate()) {
    $clean_inputs = $form->values();

    unset($clean_inputs['password_repeat']);

    App::$db->insertRow('users', $clean_inputs);

    header('Location: login.php');
}

$page = new BasePage([
    'title' => 'REGISTER',
    'content' => $form->render()
]);

print $page->render();

