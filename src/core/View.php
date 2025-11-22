<?php
namespace App\core;

class View {
    public static function render(string $view, array $data = []): void {
        extract($data);
        $base = __DIR__ . '/../views/';
        $file = $base . $view . '.php';

        if (!file_exists($file)) {
            throw new \RuntimeException("View no encontrada: $file");
        }

        require $base . 'layout/main.php';
    }
}
