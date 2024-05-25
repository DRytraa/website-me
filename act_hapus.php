<?php
require_once "koneksi.php";

if (isset($_GET['id_transaksi'])) {
   $id_transaksi = $_GET['id_transaksi'];

   $query = $conn->query("DELETE FROM transaksi WHERE id_transaksi = '$id_transaksi'");

   if ($query) {
      echo "<script>
         alert('Data berhasil dihapus!');
         window.location.href='data_transaksi.php';
      </script>";
   } else {
      echo "<script>
         alert('Data gagal dihapus!');
         window.location.href='data_transaksi.php';
      </script>";
   }
}
