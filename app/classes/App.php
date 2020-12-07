<?php

namespace App;

use Core\Cookie;
use Core\FileDB;
use Core\Session;

class App
{
    public static $db;
    public static $session;
    public static $cookie;

    public function __construct()
    {
        self::$db = new FileDB(DB_FILE);
        self::$db->load();
        self::$session = new Session();
        self::$cookie = new Cookie();
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        self::$db->save();
    }
}