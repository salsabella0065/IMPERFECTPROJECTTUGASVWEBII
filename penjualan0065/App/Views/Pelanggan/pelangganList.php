<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pelanggan List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Daftar Pelanggan</h1>
        <a href="?action=create" class="btn btn-primary mb-3">Tambah Pelanggan</a>
        <table class="table table-bordered table-hover">
            <thead class="table-light">
                <tr>
                    <th>ID PELANGGAN</th>
                    <th>NAMA</th>
                    <th>ALAMAT</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($tpelanggan)): ?>
                    <?php foreach ($tpelanggan as $pelanggan): ?>
                        <tr>
 -                           <td><?php echo $pelanggan['id_pelanggan']; ?></td>
                            <td><?php echo $pelanggan['nama_pelanggan']; ?></td>
                            <td><?php echo $pelanggan['alamat']; ?></td>
                            <td>
                                <a href="?action=edit&id=<?php echo $pelanggan['id_pelanggan']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="?action=delete&id=<?php echo $pelanggan['id_pelanggan']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="text-center">Tidak ada data pengguna.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>