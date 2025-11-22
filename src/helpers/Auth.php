<?php
namespace App\helpers;

class Auth {
    public static function check(): bool {
        return isset($_SESSION['user']);
    }
}
