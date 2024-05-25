<?php
require_once "koneksi.php";
session_start();
if (!isset($_SESSION['login'])) {
    header('location:login.php');
}

if (isset($_GET['id_transaksi'])) {
    $id_transaksi = $_GET['id_transaksi'];

    $cari = $conn->query("SELECT * FROM transaksi WHERE id_transaksi = '$id_transaksi'");
    $data = mysqli_fetch_assoc($cari);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit </title>
    <!-- Impots Booststrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-3 shadow">
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
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <div class="card-title">
                            <h4 class="fw-bold">Form Edit</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="act_edit.php" method="post">
                            <input type="hidden" name="id_transaksi" value="<?= $data['id_transaksi'] ?>">
                            <div class="mb-2">
                                <label for="tanggal" class="form-label">Tanggak Transaksi</label>
                                <input type="date" id="tanggal" name="tanggal" class="form-control" value="<?= $data['tanggal'] ?>">
                            </div>
                            <div class="mb-2">
                                <label for="namap" class="form-label">Nama Panjang</label>
                                <input type="text" id="namap" name="namap" class="form-control" value="<?= $data['namap'] ?>">
                            </div>
                            <div class="mb-2">
                                <label for="no_hp" class="form-label">Nomor Headphone</label>
                                <input type="text" id="no_hp" name="no_hp" class="form-control" value="<?= $data['no_hp'] ?>">
                            </div>
                            <div class="mb-2">
                                <label for="lamacuci" class="form-label">Lama Cuci</label>
                                <input type="number" id="lamacuci" name="lamacuci" class="form-control" value="<?= $data['lamacuci'] ?>">
                            </div>
                            <div class="mb-2">
                                <label for="harga" class="form-label">Harga</label>
                                <input type="number" id="harga" name="harga" class="form-control" value="<?= $data['harga'] ?>">
                            </div>
                            <div class="mb-2">
                                <label for="berat" class="form-label">Berat</label>
                                <input type="number" id="berat" name="berat" class="form-control" value="<?= $data['berat'] ?>">
                            </div>
                            <button type="submit" name="submit" class="btn btn-sm btn-outline-primary">Simpan</button>
                            <a href="data_transaksi.php" class="btn btn-sm btn-outline-danger float-end">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>