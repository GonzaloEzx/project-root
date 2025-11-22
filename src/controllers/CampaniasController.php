<?php
namespace App\controllers;

use App\core\Controller;

class CampaniasController extends Controller {
    public function index(): void {
        $this->view('campanias/index', [
            'campanias' => [] // TODO
        ]);
    }
}
