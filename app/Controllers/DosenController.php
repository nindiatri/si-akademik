<?php

require_once __DIR__ . '/../Models/Dosen.php';

class DosenController
{
    public function index()
    {
        global $pdo;

        $model = new Dosen($pdo);
        $dosen = $model->getAll();

        require_once __DIR__ . '/../Views/dosen/index.php';
    }

    public function create()
    {
        require_once __DIR__ . '/../Views/dosen/create.php';
    }

    public function store()
    {
        global $pdo;

        $model = new Dosen($pdo);

        $data = [
            'nidn' => $_POST['nidn'],
            'nama' => $_POST['nama'],
            'bidang_keahlian' => $_POST['bidang_keahlian']
        ];

        $model->create($data);

        header('Location: /si-akademik/public/dosen');
        exit;
    }

    public function edit()
    {
        global $pdo;

        $id = $_GET['id'];

        $model = new Dosen($pdo);
        $dosen = $model->getById($id);

        require_once __DIR__ . '/../Views/dosen/edit.php';
    }

    public function update()
    {
        global $pdo;

        $id = $_POST['id'];

        $data = [
            'nidn' => $_POST['nidn'],
            'nama' => $_POST['nama'],
            'bidang_keahlian' => $_POST['bidang_keahlian']
        ];

        $model = new Dosen($pdo);
        $model->update($id, $data);

        header('Location: /si-akademik/public/dosen');
        exit;
    }

    public function delete()
    {
        global $pdo;

        $id = $_GET['id'];

        $model = new Dosen($pdo);
        $model->delete($id);

        header('Location: /si-akademik/public/dosen');
        exit;
    }
}