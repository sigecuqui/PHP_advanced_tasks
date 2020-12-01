<?php


namespace Core;


use App\App;

class Session
{
    private $user;

    /**
     * Session constructor.
     */
    public function __construct()
    {
        $this->loginFromCookie();
    }

    /**
     * Login $user from COOKIE
     */
    public function loginFromCookie()
    {
        if ($_SESSION) {
            $this->login($_SESSION['email'], $_SESSION['password']);
        }
    }

    /**
     * Check if $user exists
     *
     * @param $email
     * @param $password
     * @return bool
     */
    public function login($email, $password)
    {
        if ($user = App::$db->getRowWhere('users', [
            'email' => $email,
            'password' => $password
        ])) {
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;

            $this->user = $user;

            return true;
        }

        return false;
    }

    /**
     * Return $user property
     *
     * @return array
     */
    public function getUser()
    {
        return $this->user ?? [];
    }

    /**
     * $user logout. Redirect if $redirect is given
     *
     * @param string|null $redirect
     */
    public function logout(?string $redirect = null)
    {
        $_SESSION = [];
        session_destroy();

        if ($redirect) {
            header("Location: $redirect");
        }
    }
}