<?php
require_once "koneksi.php";

if (isset($_POST['submit'])) {
   $tanggal = $_POST['tanggal'];
   // $tanggal = date('Y-m-d');
   $namap = $_POST['namap'];
   $no_hp = $_POST['no_hp'];
   $lamacuci = $_POST['lamacuci'];
   $harga = $_POST['harga'];
   $berat = $_POST['berat'];
   
   $query = $conn->query("INSERT INTO transaksi 
   (tanggal, namap, no_hp, lamacuci, harga, berat) VALUES 
   ('$tanggal', '$namap','$no_hp','$lamacuci','$harga','$berat')");

   if ($query) {
      echo "<script>
         alert('Data berhasil ditambahkan!');
         window.location.href='data_transaksi.php';
      </script>";
   } else {
      echo "<script>
         alert('Data gagal ditambahkan!');
         window.location.href='data_transaksi.php';
      </script>";
   }
}
