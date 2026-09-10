<?php

require_once __DIR__ . '/../Models/Mahasiswa.php';

class MahasiswaController
{
    public function index()
    {
        $model = new Mahasiswa();
        $mahasiswa = $model->getAll();

        require_once __DIR__ . '/../Views/mahasiswa/index.php';
    }

    public function detail()
    {
        $model = new Mahasiswa();

        $nim = $_GET['nim'] ?? null;

        if (!$nim) {
            echo "NIM tidak ditemukan.";
            exit;
        }

        $mahasiswa = $model->getByNim($nim);

        if (!$mahasiswa) {
            echo "Data mahasiswa tidak ditemukan.";
            exit;
        }

        require_once __DIR__ . '/../Views/mahasiswa/detail.php';
    }
}