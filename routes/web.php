<?php

return [
    'GET' => [
        '/'                 => ['AuthController', 'login'],
        '/login'            => ['AuthController', 'login'],
        '/dashboard'        => ['AuthController', 'dashboard'],
        '/mahasiswa'        => ['MahasiswaController', 'index'],
        '/mahasiswa/detail' => ['MahasiswaController', 'detail'],
        '/dosen'            => ['DosenController', 'index'],
        '/logout'           => ['AuthController', 'logout'],
    ],

    'POST' => [
        '/login/process'    => ['AuthController', 'processLogin'],
        '/dosen'            => ['DosenController', 'index'],
        '/dosen/create'     => ['DosenController', 'create'],
    ]
];