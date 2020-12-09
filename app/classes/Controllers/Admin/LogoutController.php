<?php


namespace App\Controllers\Admin;

use App\App;

class LogoutController
{
    function logout(): ?string
    {
        App::$session->logout('/login');
    }
}