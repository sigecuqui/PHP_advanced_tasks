<?php

use App\App;

/**
 * Check if user is logged in
 *
 * @return bool
 */
function is_logged_in(): bool
{
    if ($_SESSION) {

        return (bool)App::$db->getRowWhere('users', [
            'email' => $_SESSION['email'],
            'password' => $_SESSION['password']
        ]);
    }

    return false;
}

/**
 * End user session. Log out user and redirect to given page.
 *
 * @param string|null $redirect
 */
function logout(string $redirect = null): void
{
    $_SESSION = [];
    session_destroy();

    if ($redirect) {
        header("Location: $redirect");
    }
}