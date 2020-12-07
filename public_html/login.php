<?php
require '../bootloader.php';

use App\App;
use App\Views\BasePage;
use App\Views\Forms\LoginForm;
use App\Views\Navigation;

$nav = new Navigation();

$form = new LoginForm();

if ($form->validate()) {
    $clean_inputs = $form->values();

    App::$session->login($clean_inputs['email'], $clean_inputs['password']);

    if (App::$session->getUser()) {
        header('Location: Admin/add.php');
        exit();
    }
}

$page = new BasePage([
    'title' => 'LOGIN',
    'content' => $form->render()
]);

print $page->render();
