<?php
namespace App\controllers;

use App\core\Controller;

class AuthController extends Controller {
    public function showLogin(): void {
        $this->view('auth/login');
    }

    public function login(): void {
        // TODO: validar credenciales y setear sesión
        echo "login";
    }

    public function logout(): void {
        // TODO: destruir sesión
        echo "logout";
    }
}
