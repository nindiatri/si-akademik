<?php

return [
    'GET' => [
        '/'                 => ['AuthController', 'login'],
        '/login'            => ['AuthController', 'login'],
        '/dashboard'        => ['AuthController', 'dashboard'],
        '/mahasiswa'        => ['MahasiswaController', 'index'],
        '/mahasiswa/detail' => ['MahasiswaController', 'detail'],

        // Dosen
        '/dosen'            => ['DosenController', 'index'],
        '/dosen/create'     => ['DosenController', 'create'],
        '/dosen/edit'       => ['DosenController', 'edit'],
        '/dosen/delete'     => ['DosenController', 'delete'],

        '/logout'           => ['AuthController', 'logout'],
    ],

    'POST' => [
        '/login/process'    => ['AuthController', 'processLogin'],

        // Dosen
        '/dosen/store'      => ['DosenController', 'store'],
        '/dosen/update'     => ['DosenController', 'update'],
    ]
];