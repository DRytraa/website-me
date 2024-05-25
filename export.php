<?php
require_once "function.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Halaman laporan</title>
</head>
<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan.xls");
?>

<body>
   <h4 class="text-center">LAPORAN</h4>
   <table class="table table-bordered" border="1">
      <thead class="bg-success text-white">
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

            $tgl_selesai = date('Y-m-d', strtotime("+$lamacuci days", strtotime($tanggal)));

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
               <td>
                  <a href="edit_pemesanan.php?id_transaksi=<?= $data['id_transaksi'] ?>" class="fw-bold">Edit</a>
                  <a href="act_hapus_pemesanan.php?id_transaksi=<?= $data['id_transaksi'] ?>" class="fw-bold">Hapus</a>
               </td>
            </tr>
         <?php endforeach ?>
      </tbody>
   </table>
</body>

</html>