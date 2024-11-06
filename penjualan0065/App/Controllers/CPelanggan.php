<?php
require_once 'App/Models/MPelanggan.php';
class CPelanggan
{
    private $mPelanggan;
    public function __construct ($dbConnection)
    {
        $this->mPelanggan = new MPelanggan($dbConnection);
    }
    
    public function index()
    {
        // Memanggil semua data pengguna dari model
        $pelanggan = $this->mPelanggan->getAllpelanggan();

        // Meneruskan data pengguna ke view daftar
        require_once 'App/Views/Pelanggan/pelangganList.php';
    }
    public function store()
    {
        // Ambil data dari form
        $id = $_POST['id_pelanggan'];
        $nama = $_POST['nama_pelanggan'];
        $alamat = $_POST['alamat'];
        try {
            $this->mPelanggan->createPelanggan($id, $nama, $alamat);
            header('Location: pelanggan.php');
            exit;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public function edit ($id)
    {
        //retrieve the user's existing data
        $pelanggan = $this->mPelanggan->getPelangganById($id);

        //pass the data to the edit view
        require_once 'App/Views/editPelanggan.php';
    }
    public function delete($id)
    {
    $this->mPelanggan->deletePelanggan($id);
    header('Location: pelanggan.php');
    exit();
    }
    public function update($id)
    {
    // Ambil data yang diperbarui dari form
    $nama = $_POST['nama_pelanggan'];
    $alamat = $_POST['alamat'];

    // Panggil fungsi update di model untuk memperbarui data
    $this->mPelanggan->updatePelanggan($id, $nama, $alamat);

    // Redirect ke halaman daftar pengguna
    header('Location: pelanggan.php');
}
}