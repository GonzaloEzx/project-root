# Project Root

Estructura base MVC en PHP (liviana) para gestión de clientes, lotes y campañas.

## Requisitos
- PHP 8.1+
- MySQL/MariaDB
- Composer

## Levantar local
1. Copiá `.env.example` a `.env` y completá variables.
2. Apuntá tu servidor a `/public`.
3. Ejecutá con un server local (XAMPP/Laragon/Docker).

## Convenciones
- Controladores finitos: delegan a Services.
- Models solo datos/ORM simple.
- Validaciones en `helpers/Validator.php`.
