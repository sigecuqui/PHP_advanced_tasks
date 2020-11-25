<?php
require '../bootloader.php';
$fileDB = new FileDB(DB_FILE);
$fileDB->load();
$fileDB->insertRow('test',['nick' => 'bbz']);
$fileDB->save();
//$fileDB->getRowsWhere('test', ['bbz']);
var_dump($fileDB);