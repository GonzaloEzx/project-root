<?php
declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\core\Router;

$router = new Router();
require __DIR__ . '/../src/routes/web.php';
$router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
