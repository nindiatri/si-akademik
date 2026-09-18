<?php

session_start();

// Load Controllers
require_once __DIR__ . '/../app/Controllers/AuthController.php';
require_once __DIR__ . '/../app/Controllers/MahasiswaController.php';
require_once __DIR__ . '/../app/Controllers/DosenController.php';

// Load Middleware
require_once __DIR__ . '/../app/Middleware/AuthMiddleware.php';

// Ambil URI
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Base URL project
$basePath = '/si-akademik-1/public';

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

// Ubah URI menjadi URL tanpa slash depan
$url = ltrim($uri, '/');


// =========================
// ROUTE LOGIN
// =========================

if ($url === '') {
    $controller = new AuthController();
    $controller->login();
    exit;
}

if ($url === 'login') {
    $controller = new AuthController();
    $controller->login();
    exit;
}

if ($url === 'login/process' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new AuthController();
    $controller->processLogin();
    exit;
}


// =========================
// ROUTE DASHBOARD
// =========================

if ($url === 'dashboard') {
    AuthMiddleware::handle();

    $controller = new AuthController();
    $controller->dashboard();
    exit;
}


// =========================
// ROUTE MAHASISWA
// =========================

if ($url === 'mahasiswa') {
    AuthMiddleware::handle();

    $controller = new MahasiswaController();
    $controller->index();
    exit;
}

if ($url === 'mahasiswa/detail' && isset($_GET['nim'])) {
    AuthMiddleware::handle();

    $controller = new MahasiswaController();
    $controller->detail();
    exit;
}


// =========================
// ROUTE DOSEN
// =========================

if ($url === 'dosen') {
    AuthMiddleware::handle();

    $controller = new DosenController();
    $controller->index();
    exit;
}

if ($url === 'dosen/create') {
    AuthMiddleware::handle();

    $controller = new DosenController();
    $controller->create();
    exit;
}

if ($url === 'dosen/store' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    AuthMiddleware::handle();

    $controller = new DosenController();
    $controller->store();
    exit;
}

if ($url === 'dosen/edit' && isset($_GET['id'])) {
    AuthMiddleware::handle();

    $controller = new DosenController();
    $controller->edit();
    exit;
}

if ($url === 'dosen/update' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    AuthMiddleware::handle();

    $controller = new DosenController();
    $controller->update();
    exit;
}

if ($url === 'dosen/delete' && isset($_GET['id'])) {
    AuthMiddleware::handle();

    $controller = new DosenController();
    $controller->delete();
    exit;
}


// =========================
// ROUTE LOGOUT
// =========================

if ($url === 'logout') {
    $controller = new AuthController();
    $controller->logout();
    exit;
}


// =========================
// JIKA ROUTE TIDAK DITEMUKAN
// =========================

http_response_code(404);
echo "404 - Halaman Tidak Ditemukan";