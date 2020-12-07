<?php

use App\App;
use App\Views\BasePage;
use App\Views\Forms\Admin\AddForm;
use App\Views\Navigation;

require '../../bootloader.php';

if (!App::$session->getUser()) {
    header('Location: /login.php');
    exit();
}

$row_id = $_GET['id'] ?? null;

if ($row_id === null) {
    header("Location: /admin/list.php");
    exit();
}

$form = new AddForm();
$nav = new Navigation();

$form->fill(App::$db->getRowById('items', $row_id));

if ($form->validate()) {
    $clean_inputs = $form->values();

    App::$db->updateRow('items', $row_id, $clean_inputs);
}


$page = new BasePage([
    'title' => 'Add',
    'content' => $form->render()
]);

print $page->render();
