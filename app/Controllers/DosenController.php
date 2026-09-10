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

    public function create()
    {
        echo "Form Tambah Dosen";
    }
}