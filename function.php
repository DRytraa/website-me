<?php
require_once "koneksi.php";
function rp($angka)
{
    $angka = "Rp. " . number_format($angka, 0, ',', '.');
    return $angka;
}
