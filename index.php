<?php
require_once "koneksi.php";
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
   <title>Home</title>
   <!-- Impots Booststrap -->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
   <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: orange ">
      <div class="container">
         <a class="navbar-brand fw-bold " href="#">App Loundry</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
               <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link " href="data_transaksi.php">Transaksi</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="form_tambah.php">Add Transaksi</a>
               </li>
            </ul>
            <a class="btn btn-sm btn-outline-light" href="logout.php" onclick="return confirm('Apakah Anda Yakian Akan Keluar')">Logout</a>
         </div>
      </div>
   </nav>

   <main class="mt-5">
      <div class="container">
         <div class="row">
            <div class="col-lg-8">
               <div class="card alert alert-warning border-0 border-start border-secondary border-3 rounded-0">
                  <div class="card-body">
                     <span class="display-5 fw-bold"></span>
                     <hr>
                     <h3>Selamat Datang Di Aplikasi Loundry</h3>
                     <h5>Jl. Cilik Riwut km 1,5 No 4, Jekan Raya, Kota Palangka Raya
                        Kalimantan Tengah
                     </h5>
                  </div>
               </div>
            </div>
            <div class=" card col-lg-4">
               <img src="assets/aaa.jpeg" alt="" width="100%">
            </div>
         </div>
      </div>
   </main>

   <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>