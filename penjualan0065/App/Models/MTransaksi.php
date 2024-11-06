<?php

class MTransaksi
{
   private $db;

   public function __construct($dbConnection)
   {
      $this->db = $dbConnection;
   }
   public function createTransaksi($id, $nama, $harga, $stok)
    {
      $stmt = $this->db->prepare("INSERT INTO ttransaksai (id_transaksi, kode_produk, id_pelanggan, jumlah, total_harga, tanggal) VALUES (:idt, :kdp, :idp, :jml, :tharga, :tgl)");
      $stmt->bindParam(':idt', $id);
      $stmt->bindParam(':kdp', $kdp);      
      $stmt->bindParam(':idp', $idp);
      $stmt->bindParam(':jumlah', $jumlah);
      $stmt->bindParam(':tharga', $tharga);
      $stmt->bindParam(':tgl', $tgl);
      $stmt->execute();
    }
   public function getTransaksiById($id)
   {
      $stmt = $this->db->prepare("SELECT * FROM ttransaksi WHERE id_transaksi = :idt");
      $stmt->bindParam(':idt', $id);
      $stmt->execute();
      return $stmt->fetch(PDO::FETCH_ASSOC);
   }

   public function getAllTransaksi()
   {
      $stmt = $this->db->query("SELECT * FROM ttransaksi");
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
   }
}