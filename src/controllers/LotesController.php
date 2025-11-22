<?php
namespace App\controllers;

use App\core\Controller;

class LotesController extends Controller {
    public function index(): void {
        $this->view('lotes/index', [
            'lotes' => [] // TODO
        ]);
    }
}
