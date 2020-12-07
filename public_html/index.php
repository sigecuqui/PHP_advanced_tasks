<?php

use App\App;
use App\Views\BasePage;
use App\Views\Navigation;
use Core\View;

require '../bootloader.php';

$content = new View([
    'title' => 'Welcome to BBZ shop',
    'products' => App::$db->getRowsWhere('items')
]);

$nav = new Navigation();

$page = new BasePage([
    'title' => 'SHOP',
    'content' => $content->render(ROOT . '/app/templates/content/index.tpl.php')
]);

print $page->render();



