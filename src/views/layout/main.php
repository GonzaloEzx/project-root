<?php
// Layout principal. Espera $view (ruta relativa) y $data.
$viewFile = __DIR__ . '/../' . $view . '.php';
?><!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title><?= htmlspecialchars(getenv('APP_NAME') ?: 'Project Root') ?></title>
  <link rel="stylesheet" href="/assets/css/app.css"/>
</head>
<body>
  <main class="container">
    <?php require $viewFile; ?>
  </main>
  <script src="/assets/js/app.js"></script>
</body>
</html>
