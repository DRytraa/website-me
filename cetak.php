<?php
require_once "function.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Halaman CETAK</title>
   <!-- Impots Booststrap -->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body onload="window.print()">
   <div class="container">
      <div class="row">
         <div class="col-12">
            <h4 class="text-center">LAPORAN</h4>
            <div class="col-md-12">
               <table class="table table-bordered" id="dataTable">
                  <thead class="bg-primary text-white">
                  <tr class="text-center">
                     <th>No</th>
                     <th>Tgl. Transaksi</th>
                     <th>Nama Pelanggan</th>
                     <th>Lama Cuci</th>
                     <th>Tgl. Selesai</th>
                     <th>Harga</th>
                     <th>Berat(Kg)</th>
                     <th>Total</th>
                  </tr>
               </thead>
               <tbody>
                  <?php
                  $no = 1;
                  $query = $conn->query("SELECT * FROM transaksi ORDER BY id_transaksi DESC");
                  foreach ($query as $data) :

                     // hitung tgl selesai
                     $tanggal = $data['tanggal'];
                     $lamacuci = $data['lamacuci'];

                     $tgl_selesai = date('Y-m-d', strtotime("+$lamacuci days",strtotime($tanggal)));

                     // hitung total
                     $total = $data['harga'] * $data['berat'];

                  ?>
                     <tr class="text-center">
                        <td><?= $no++; ?></td>
                        <td><?= $data['tanggal'] ?></td>
                        <td><?= $data['namap'] ?></td>
                        <td><?= $data['lamacuci'] ?> Hari</td>
                        <td><?= $tgl_selesai ?></td>
                        <td><?= rp($data['harga']) ?></td>
                        <td><?= $data['berat'] ?></td>
                        <td><?= rp($total) ?></td>
                     </tr>
                     <?php endforeach ?>
                  </tbody>
               </table>

               <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>