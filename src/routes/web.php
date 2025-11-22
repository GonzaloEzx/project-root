<?php
use App\controllers\AuthController;
use App\controllers\ClientesController;
use App\controllers\LotesController;
use App\controllers\CampaniasController;

/** @var \App\core\Router $router */

$router->get('/', function () {
    echo "OK - Project Root";
});

$router->get('/login', [AuthController::class, 'showLogin']);
$router->post('/login', [AuthController::class, 'login']);
$router->post('/logout', [AuthController::class, 'logout']);

$router->get('/clientes', [ClientesController::class, 'index']);
$router->get('/lotes', [LotesController::class, 'index']);
$router->get('/campanias', [CampaniasController::class, 'index']);
