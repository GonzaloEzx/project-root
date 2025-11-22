<?php
namespace App\helpers;

class Validator {
    public static function required(?string $value): bool {
        return trim((string)$value) !== '';
    }
}
