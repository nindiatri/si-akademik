<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body>

    <div class="container mt-5">

        <h1 class="text-center mb-4">
            Politeknik Negeri Jember
        </h1>

        <div class="card shadow">
            <div class="card-body">

                <h2 class="card-title mb-4">
                    Data Dosen
                </h2>

                <a
                    href="/si-akademik/public/dosen/create"
                    class="btn btn-primary mb-3">
                    Tambah Dosen
                </a>

                <table class="table table-bordered table-striped">

                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>NIDN</th>
                            <th>Nama</th>
                            <th>Bidang Keahlian</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php foreach ($dosen as $index => $item): ?>

                            <tr>
                                <td>
                                    <?= $index + 1; ?>
                                </td>

                                <td>
                                    <?= htmlspecialchars($item['nidn']); ?>
                                </td>

                                <td>
                                    <?= htmlspecialchars($item['nama']); ?>
                                </td>

                                <td>
                                    <?= htmlspecialchars($item['bidang_keahlian']); ?>
                                </td>
                                <td>
                                    <a
                                        href="/si-akademik/public/dosen/edit?id=<?= $item['id']; ?>"
                                        class="btn btn-warning btn-sm">
                                        Edit
                                    </a>

                                    <a
                                        href="/si-akademik/public/dosen/delete?id=<?= $item['id']; ?>"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Hapus data ini?')">
                                        Hapus
                                    </a>
                                </td>
                            </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>

                <a
                    href="/si-akademik/public/dashboard"
                    class="btn btn-secondary">
                    Kembali ke Dashboard
                </a>

                <a
                    href="/si-akademik/public/mahasiswa"
                    class="btn btn-success">
                    Daftar Mahasiswa
                </a>

            </div>
        </div>

    </div>

</body>

</html>