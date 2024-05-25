<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = $conn->query("SELECT * FROM pengguna WHERE username='$username' AND password='$password'");

    $result = mysqli_num_rows($query);

    if ($result > 0) {
        $data = mysqli_fetch_assoc($query);
        session_start();
        $_SESSION['login'] = true;
        $_SESSION['nama_pengguna'] = $data['nama_pengguna'];
        header('location:index.php');
    } else {
        session_start();
        $_SESSION['error_login'] = "Silahkan masukkan username dan password yang bernar!";
        header('location:login.php');
    }
} else {
    header('location:login.php');
}
