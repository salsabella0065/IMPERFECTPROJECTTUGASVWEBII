<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1>Edit Produk</h1>
        <form action="?action=update&id=<?php echo $user['id']; ?>" method="POST">
        <div class="mb-3">
                <label for="kode_barang" class="form-label">Kode Barang</label>
                <input type="text" class="form-control" id="kode_barang" name="kode_barang" value="<?php echo $produk['id_produk']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="nama_barang" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?php echo $produk['nama_barang']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $produk['harga']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="text" class="form-control" id="stok" name="stok" value="<?php echo $produk['stok']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="index.php" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>

</html>