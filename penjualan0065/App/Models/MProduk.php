<?php
class MProduk
{
    private $db;

    public function __construct($dbConnection)
    {
       $this->db = $dbConnection;
    }
    public function getAllProduk()
    {
       $stmt = $this->db->query("SELECT * FROM tproduk");
       return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function createProduk($id, $nama, $harga, $stok)
    {
      $stmt = $this->db->prepare("INSERT INTO tproduk (kode_barang, nama_barang, harga, stok) VALUES (:id, :nama, :harga, :stok)");
     $stmt->bindParam(':id', $id);
     $stmt->bindParam(':nama', $nama);
     $stmt->bindParam(':harga', $harga);
     $stmt->bindParam(':stok', $stok);
     $stmt->execute();
       
    }
    public function deleteProduk($id)
    {
     $stmt = $this->db->prepare("DELETE FROM tproduk WHERE kode_barang = :id");
     $stmt->bindParam(':id', $id);
     $stmt->execute();
    }
    public function updatePelanggan($id, $nama, $email)
    {
     $stmt = $this->db->prepare("UPDATE tproduk SET nama_produk = :nama, harga = :harga, stok =:stok WHERE kode_barang = :id");
     $stmt->bindParam(':id', $id);
     $stmt->bindParam(':nama', $nama);
     $stmt->bindParam(':harga', $harga);
     $stmt->bindParam(':stok', $stok);
     $stmt->execute();
    }
 }
