<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Dosen - Sistem Akademik</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link
        rel="stylesheet"
        href="/si-akademik/public/css/style.css"
    >
</head>

<body>

    <h1 class="text-center mb-4">
        Politeknik Negeri Jember
    </h1>

    <div class="card shadow">

        <div class="card-body">

            <h2 class="card-title mb-4">
                Data Dosen
            </h2>

            <table class="table table-bordered table-striped">

                <thead class="table-dark">

                    <tr>
                        <th width="100">No</th>
                        <th>NIDN</th>
                        <th>Nama</th>
                    </tr>

                </thead>

                <tbody>

                    <?php $no = 1; ?>

                    <?php foreach ($dosen as $dsn): ?>

                        <tr>

                            <td>
                                <?= $no++; ?>
                            </td>

                            <td>
                                <?= htmlspecialchars($dsn['nidn']); ?>
                            </td>

                            <td>
                                <?= htmlspecialchars($dsn['nama']); ?>
                            </td>

                        </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

            <div class="mt-3">

                <a
                    href="/si-akademik/public/mahasiswa"
                    class="btn btn-secondary"
                >
                    Data Mahasiswa
                </a>

                <a
                    href="/si-akademik/public/dashboard"
                    class="btn btn-primary"
                >
                    Kembali ke Dashboard
                </a>

            </div>

        </div>

    </div>

</div>

</body>

</html>