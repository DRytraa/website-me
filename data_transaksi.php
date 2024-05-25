<?php
require_once "function.php";
session_start();
if (!isset($_SESSION['login'])) {
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Transaksi</title>
   <!-- Impots Booststrap -->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/DataTables/datatables.min.css">
   <!-- jQuery -->
   <script src="assets/js/jquery-3.7.0.js"></script>
</head>

<body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
      <div class="container">
         <a class="navbar-brand fw-bold " href="#">App Loundry</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
               <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="index.php">Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link active" href="data_transaksi.php">Transaksi</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="form_tambah.php">Add Transaksi</a>
               </li>
            </ul>
            <a class="btn btn-sm btn-outline-light" href="logout.php" onclick="return confirm('Apakah Anda Yakian Akan Keluar')">Logout</a>
         </div>
      </div>
   </nav>

   <div class="container">
      <div class="row">
         <div class="col-12">
            <h4 class="display-6 fw-bold">Data Transaksi</h4>
            <hr>
         </div>
      </div>
      <div class="row mb-3">
         <div class="col-md-12">
            <a href="cetak.php" class="btn btn-sm btn-outline-secondary">Print</a>
            <a href="export.php" target="_blank" class="btn btn-sm btn-outline-success">Export</a>
            <a href="form_tambah.php" class="btn btn-sm btn-outline-primary float-end ">Tambah</a>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <table class="table table-striped" id="dataTable">
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
                     <th>Aksi</th>
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
                        <td><?= $data['namap'] . "<br>" . "<small class= 'text-muted'>" . $data['no_hp'] . "</small>"  ?></td>
                        <td><?= $data['lamacuci']?> Hari</td>
                        <td><?= $tgl_selesai ?></td>
                        <td><?= rp($data['harga']) ?></td>
                        <td><?= $data['berat'] ?></td>
                        <td><?= rp($total) ?></td>
                        <td>
                           <a href="form_edit.php?id_transaksi=<?= $data['id_transaksi'] ?>" class="fw-bold">Edit</a>
                           <a href="act_hapus.php?id_transaksi=<?= $data['id_transaksi'] ?>" class="fw-bold">Hapus</a>
                        </td>
                     </tr>
                  <?php endforeach ?>
               </tbody>
            </table>
         </div>
      </div>
   </div>

   <script src="assets/js/bootstrap.bundle.min.js"></script>
   <script src="assets/DataTables/datatables.min.js"></script>
   <script>
      let tableMhs = $('#dataTable').DataTable({
         lengthChange: true,
         pageLength: 5,
         lengthMenu: [
            [5, 10, 20, -1],
            [5, 10, 20, 'Todos']
         ]
      });
      tableMhs.buttons().container()
         .appendTo('#dataTable_wrapper .col-md-6:eq(0)');
   </script>
</body>

</html>