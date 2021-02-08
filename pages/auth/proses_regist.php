<?php

include '../../configs/koneksi.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$role = $_POST['role'];

$cek = mysqli_query($koneksi, "SELECT email FROM user where email = '$email'");
$jumlah = mysqli_num_rows($cek);

if ($jumlah > 0) {
    echo 'gagal daftar';
    header('location:register.php?pesan=gagal');
} else {
    $koneksi = mysqli_query($koneksi, "INSERT INTO user (nama,email,password,role) values ('$name','$email','$password','$role')");
    echo 'berhasil daftar';
    header('location:login.php');
}
