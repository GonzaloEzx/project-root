<?php
namespace App\controllers;

use App\core\Controller;

class ClientesController extends Controller {
    public function index(): void {
        $this->view('clientes/index', [
            'clientes' => [] // TODO: cargar desde Model/Service
        ]);
    }
}
