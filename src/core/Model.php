<?php
namespace App\core;

use PDO;

class Model {
    protected static function db(): PDO {
        return Database::getConnection();
    }
}
