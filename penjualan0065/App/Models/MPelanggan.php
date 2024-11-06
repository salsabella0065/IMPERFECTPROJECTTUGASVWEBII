<?php
class MPelanggan
{
    private $db;

    public function __construct($dbConnection)
    {
       $this->db = $dbConnection;
    }
    public function createPelanggan($id, $nama, $alamat) 
    {
      // Periksa apakah ID pelanggan sudah ada
      $stmt = $this->db->prepare("SELECT COUNT(*) FROM tpelanggan WHERE id_pelanggan = :id");
      $stmt->bindParam(':id', $id);
      $stmt->execute();
      $count = $stmt->fetchColumn();
      if ($count > 0) {
         // Jika ID sudah ada, tampilkan pesan error atau return false
         throw new Exception("ID pelanggan sudah ada. Gunakan ID yang berbeda.");
      }
      $stmt = $this->db->prepare("INSERT INTO tpelanggan (id_pelanggan, nama_pelanggan, alamat) VALUES (:id, :nama, :alamat)");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nama', $nama);
        $stmt->bindParam(':alamat', $alamat);
        $stmt->execute();
     }
     
      
    public function getAllPelanggan()
    {
       $stmt = $this->db->query("SELECT * FROM tpelanggan");
       return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function deletePelanggan($id)
    {
     $stmt = $this->db->prepare("DELETE FROM tpelanggan WHERE id_pelanggan = :id");
     $stmt->bindParam(':id', $id);
     $stmt->execute();
    }
    public function updatePelanggan($id, $nama, $alamat)
    {
     $stmt = $this->db->prepare("UPDATE tpelanggan SET nama_pelanggan = :nama, alamat = :alamat WHERE id_pelanggan = :id");
     $stmt->bindParam(':id', $id);
     $stmt->bindParam(':nama', $nama);
     $stmt->bindParam(':alamat', $alamat);
     $stmt->execute();
    }
   }
