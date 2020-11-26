<?php

require '../bootloader.php';

$fileDB = new fileDB(DB_FILE);
$fileDB->createTable('users');
$fileDB->insertRow('users', ['email' => 'algis@mail.com', 'password' => 'as']);
$fileDB->createTable('items');
$fileDB->save();
