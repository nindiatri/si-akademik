<?php

require_once __DIR__ . '/../Models/Dosen.php';

class DosenController
{
    public function index()
    {
        $model = new Dosen();

        $dosen = $model->getAll();

        require_once __DIR__ . '/../Views/dosen/index.php';
    }

    public function detail()
    {
        $model = new Dosen();

        $nidn = $_GET['nidn'] ?? null;

        if (!$nidn) {
            echo "NIDN tidak ditemukan.";
            exit;
        }

        $dosen = $model->getByNidn($nidn);

        if (!$dosen) {
            echo "Data dosen tidak ditemukan.";
            exit;
        }

        require_once __DIR__ . '/../Views/dosen/detail.php';
    }

    public function create()
    {
        echo "Form Tambah Dosen";
    }
}