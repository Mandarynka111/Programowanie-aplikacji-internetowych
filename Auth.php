<?php

class Auth
{
    public function login(string $email, string $password): bool
    {
        global $mysqli;

        $email = $mysqli->real_escape_string($email);
        $password = $mysqli->real_escape_string($this->passwordHash($password));

        if (!$mysqli->query("SELECT 1 FROM `user` WHERE `email` = '" . $email . "' AND `password` = '" . $password . "'")->fetch_assoc()) {
            return false;
        }

        $_SESSION['auth'] = true;
        $_SESSION['email'] = $email;

        return true;

    }

    public function register(string $email, string $password)
    {
        global $mysqli;
        $email = $mysqli->real_escape_string($email);
        $password = $mysqli->real_escape_string($this->passwordHash($password));
        $mysqli->query("INSERT INTO user VALUES (null,'" . $email . "','" . $password . "')");
    }

    public function isLogged(): bool
    {
        return isset($_SESSION['auth']);
    }

    public function logout()
    {
        session_destroy();
    }

    private function passwordHash(string $password): string
    {
        return md5($password);
    }
}