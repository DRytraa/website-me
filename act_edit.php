<?php
require_once "koneksi.php";

if (isset($_POST['submit'])) {
   $id_transaksi = $_POST['id_transaksi'];
   $tanggal = $_POST['tanggal'];
   // $tanggal = date('Y-m-d');
   $namap = $_POST['namap'];
   $no_hp = $_POST['no_hp'];
   $lamacuci = $_POST['lamacuci'];
   $harga = $_POST['harga'];
   $berat = $_POST['berat'];
   


   $query = $conn->query("UPDATE transaksi SET tanggal='$tanggal', namap='$namap', no_hp='$no_hp' , lamacuci='$lamacuci' ,
   harga='$harga' , berat='$berat' WHERE id_transaksi='$id_transaksi'");

   if ($query) {
      echo "<script>
         alert('Data berhasil diupdate!');
         window.location.href='data_transaksi.php';
      </script>";
   } else {
      echo "<script>
         alert('Data gagal diupdate!');
         window.location.href='data_transaksi.php';
      </script>";
   }
}
