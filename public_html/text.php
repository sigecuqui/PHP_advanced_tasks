<?php
require '../bootloader.php';
$fileDB = new FileDB(DB_FILE);
$fileDB->createTable('test');
var_dump($fileDB->insertRow('test',['namas' => 'bbz'], 'lapas'));
$fileDB->insertRow('test',['namas' => 'bbz'], 'lapas');
$fileDB->insertRow('test',['namas' => 'bbz']);
$fileDB->insertRow('test',['namas' => 'bbz']);
$fileDB->insertRow('test',['namas' => 'bbz'], 'papas');
var_dump($fileDB->insertRow('test',['namas' => 'bbz'], 'papas'));
$fileDB->getRowWhere('test',['namas' => 'kvadratas']);
var_dump($fileDB->getRowWhere('test',['namas' => 'bbz']));
var_dump($fileDB);