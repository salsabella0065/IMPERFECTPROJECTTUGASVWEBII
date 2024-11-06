<?php
require_once 'App/Models/MProduk.php';
class CProduk
{
    private $mProduk;
    public function __construct ($dbConnection)
    {
        $this->mProduk = new MProduk ($dbConnection);
    }
    
    public function index()
    {
        // Memanggil semua data pengguna dari model
        $tproduk = $this->mProduk->getAllproduk();

        // Meneruskan data pengguna ke view daftar
        require_once 'App/Views/Produk/produkList.php';
    }
    public function store()
    {
        // Ambil data dari form
        $id = $_POST['kode_barang'];
        $nama = $_POST['nama_barang'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];

        // Simpan data ke database
        $this->mProduk->createProduk($id, $nama, $harga, $stok);

        // Redirect ke halaman daftar pengguna
        header('Location: produk.php');
    }
    public function edit ($id)
    {
        //retrieve the user's existing data
        $produk = $this->mProduk->getProdukById($id);

        //pass the data to the edit view
        require_once 'App/Views/Produk/editProduk.php';
    }
    public function delete($id)
    {
    $this->mProduk->deleteProduk($id);
    header('Location: produk.php');
    exit();
    }
    public function update($id)
{
    // Ambil data yang diperbarui dari form
    $id = $_POST['kode_barang'];
    $nama = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    // Panggil fungsi update di model untuk memperbarui data
    $this->mProduk->updateProduk($id, $nama, $harga, $stok);

    // Redirect ke halaman daftar pengguna
    header('Location: produk.php');
}
}
