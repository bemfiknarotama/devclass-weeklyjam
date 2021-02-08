<?php
include '../../configs/koneksi.php';
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$koneksi = mysqli_query($koneksi, "SELECT email,password FROM user WHERE email = '$email'");
$cek = mysqli_fetch_assoc($koneksi);

if (password_verify($password, $cek['password'])) {
    $_SESSION['email'] = $email;
    echo 'berhasil login';
    header('location: /pages/admin/dashboard.php');
} else {
    echo 'tidak berhasil login';
    header('location:login.php?pesan=gagal');
}
