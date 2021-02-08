<?php

$server = 'localhost';
$user = 'root';
$password = '';
$tabel = 'devclassblog';

$koneksi = mysqli_connect($server, $user, $password, $tabel);

if ($koneksi == true) {
    // echo 'database konek';
}
