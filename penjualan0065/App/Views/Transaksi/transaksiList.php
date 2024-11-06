<!-- App/Views/userListView.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Users List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Daftar Transaksi</h1>
        <a href="?action=create" class="btn btn-primary mb-3">Tambah Transaksi</a>
        <table class="table table-bordered table-hover">
            <thead class="table-light">
                <tr>
                    <th>Id Transaksi</th>
                    <th>Kode Barang</th>
                    <th>Id Pelanggan</th>
                    <th>Jumlah</th>
                    <th>Total Harga</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($ttransaksi)): ?>
                    <?php foreach ($ttransaksi as $transaksi): ?>
                        <tr>
                            <td><?php echo $transaksi['id_transaksi']; ?></td>
                            <td><?php echo $transaksi['kode_barang']; ?></td>
                            <td><?php echo $transaksi['id_pelanggan']; ?></td>
                            <td><?php echo $transaksi['jumlah']; ?></td>
                            <td><?php echo $transaksi['total_harga']; ?></td>
                            <td><?php echo $transaksi['tanggal']; ?></td>

                            <td>
                                <a href="?action=show&id=<?php echo $user['id']; ?>" class="btn btn-info btn-sm">Detail</a>
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
