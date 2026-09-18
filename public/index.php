<?php

session_start();

require_once __DIR__ . '/../app/Middleware/AuthMiddleware.php';

// Load Controllers
require_once __DIR__ . '/../app/Controllers/AuthController.php';
require_once __DIR__ . '/../app/Controllers/MahasiswaController.php';
require_once __DIR__ . '/../app/Controllers/DosenController.php';

// Load Middleware
require_once __DIR__ . '/../app/Middleware/AuthMiddleware.php';

// Load routes
$routes = require __DIR__ . '/../routes/web.php';

// Ambil URI
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Base URL project
$basePath = '/si-akademik/public';

// Hilangkan base path
if (strpos($uri, $basePath) === 0) {
    $uri = substr($uri, strlen($basePath));
}

// Hilangkan trailing slash
$uri = rtrim($uri, '/');

// Jika kosong, arahkan ke /
if ($uri === '') {
    $uri = '/';
}

// Ambil method HTTP
$requestMethod = $_SERVER['REQUEST_METHOD'];

// Cek route
if (isset($routes[$requestMethod][$uri])) {

    [$controller, $method] = $routes[$requestMethod][$uri];

    // Proteksi halaman yang membutuhkan login
    if (
        $uri === '/dashboard' ||
        strpos($uri, '/mahasiswa') === 0 ||
        strpos($uri, '/dosen') === 0
    ) {
        AuthMiddleware::handle();
    }

    $controllerInstance = new $controller();

    $controllerInstance->$method();

    exit;
}

// Jika route tidak ditemukan
http_response_code(404);
echo "404 - Halaman Tidak Ditemukan";