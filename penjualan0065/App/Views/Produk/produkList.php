<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Daftar Produk</h1>
        <a href="?action=create" class="btn btn-primary mb-3">Tambah Produk</a>
        <table class="table table-bordered table-hover">
            <thead class="table-light">
                <tr>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($tproduk)): ?>
                    <?php foreach ($tproduk as $produk): ?>
                        <tr>
                            <td><?php echo $produk['kode_barang']; ?></td>
                            <td><?php echo $produk['nama_barang']; ?></td>
                            <td><?php echo $produk['harga']; ?></td>
                            <td><?php echo $produk['stok']; ?></td>
                            <td>
                                <a href="?action=edit&id=<?php echo $produk['kode_barang']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="?action=delete&id=<?php echo $produk['kode_barang']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="text-center">Tidak ada data produk.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
