<?php
require_once 'App/Models/MTransaksi.php';
class CTransaksi
{
    private $mTransaksi;
    public function __construct ($dbConnection)
    {
        $this->mTransaksi = new MTransaksi ($dbConnection);
    }
    public function show($id)
    {
        // Mengambil data pengguna dari model
        $transaksi = $this->mtransaksi->getTransaksiById($id);

        // Meneruskan data pengguna ke view
        require_once 'App/Views/transaksiView.php';
    }
    public function index()
    {
        // Memanggil semua data pengguna dari model
        $ttransaksi = $this->mTransaksi->getAllTransaksi();

        // Meneruskan data pengguna ke view daftar
        require_once 'App/Views/Transaksi/transaksiList.php';
    }
    public function store()
    {
        // Ambil data dari form
        $nama = $_POST['nama'];
        $email = $_POST['email'];

        // Simpan data ke database
        $this->userModel->createUser($nama, $email);

        // Redirect ke halaman daftar pengguna
        header('Location: index.php');
    }
}