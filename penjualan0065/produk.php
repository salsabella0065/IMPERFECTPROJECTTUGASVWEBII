<?php
require_once 'Config/database.php';
require_once 'App/Controllers/CProduk.php';

$dbConnection = getDBConnection();
$controller2 = new CProduk($dbConnection);

$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? intval($_GET['id']) : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Penjualan</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Header Navigasi -->
<header class="bg-primary text-white shadow-sm">
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-dark">
            <a class="navbar-brand" href="?action=index">PENJUALAN TOKO OO65</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                <a class="nav-link " href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="pelanggan.php">Pelanggan</a>
              </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="produk.php">Barang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="transaksi.php">Transaksi</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<!-- Konten Utama -->
<main class="container mt-5">
    <?php
    // Jalankan action berdasarkan permintaan
switch ($action) {
    case 'show':
        $controller2->show($id);
        break;
    case 'create':
        require_once 'App/Views/Produk/createProduk.php';
        break;
    case 'store':
        $controller2->store();       
        break;
        case 'delete':
            $controller2->delete($id);
            break;
            case 'edit':
                $controller2->edit($id);
                break;
            case 'update':
                $controller2->update($id);
                break;
    default:
        $controller2->index();
        break;
}