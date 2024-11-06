<!DOCTYPE html>
<html lang="en">

<head>
    <title>Detail Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Detail Transaksi</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Id Transaksi: <?= htmlspecialchars($user['id_transaksi']) ?></h5>
                <p class="card-text">Kode Barang: <?= htmlspecialchars($user['kode_barang']) ?></p>
                <p class="card-text">Id Pelanggan: <?= htmlspecialchars($user['id_pelanggan']) ?></p>
                <p class="card-text">Jumlah: <?= htmlspecialchars($user['jumlah']) ?></p>
                <p class="card-text">Total Harga: <?= htmlspecialchars($user['total_harga']) ?></p>
                <p class="card-text">Tanggal: <?= htmlspecialchars($user['tanggal']) ?></p>
                <a href="index.php" class="btn btn-primary">Back to Users List</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
