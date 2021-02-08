<?php
include '../../configs/koneksi.php';
session_start();
error_reporting(0);

if (isset($_SESSION['email'])) {
    header('location: /pages/admin/dashboard.php');
}

if ($_GET['pesan'] == 'gagal') {
    echo '
    <script>
    alert("Email sudah terdaftar! Silahkan gunakan email lainnya.");
    </script>
    ';
}
?>

<html>

<head>
    <title>Let's Explore Jawa Timur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/style.css" />
</head>

<body class="text-center d-flex align-items-center auth">
    <main class="form-signin">
        <form id="form-login" action="proses_regist.php" method="POST">
            <h1 class="h3 mb-3">Registrasi dulu ya!</h1>
            <div class="alert alert-danger d-none" id='alert' role="alert">
            </div>
            <label for="inputName" class="my-2">Full Name</label>
            <input type="text" id="inputName" name="name" class="form-control" placeholder="Full Name" autofocus />

            <label for="inputEmail" class="my-2">Email</label>
            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" autofocus />

            <label for="inputPassword" class="my-2">Password</label>
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" />
            <input type="text" class="form-control" name="role" value="user" hidden>
            <button class="w-100 btn btn-lg btn-warning text-white" type="submit">
                Register
            </button>
        </form>
        <a href="login.php" class="nav-link text-center text-primary">Sudah memiliki akun? Silahkan login!</a>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="/js/login.js"></script>
</body>

</html>