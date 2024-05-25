<?php
if (!isset($_SESSION['login'])) {
    header('location:login.php');
    exit();
}

session_start();
session_unset();
session_destroy();

header('location:login.php');
