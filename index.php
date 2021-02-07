<?php
include 'configs/koneksi.php';
session_start();
$email = @$_SESSION['email'];
$query = mysqli_query($koneksi, "SELECT id,email,nama,role FROM user WHERE email ='$email'");
$cek = mysqli_fetch_assoc($query);

?>

<html>

<head>
    <title>Let's Explore Jawa Timur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

</head>

<body>
    <nav id='navbar' class="navbar fixed-top bg-success navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="">
                <img src="assets/logo-explore-jawa-timur.png" alt="" style="width: 150px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link ms-3 active">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ms-3">Destinasi</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ms-3">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link ms-3">Tentang</a>
                    </li>
                    <?php
                    if (isset($email)) {
                        echo '
                        <li class="nav-item">
                        <a href="pages/admin/dashboard.php" class="nav-link ms-3 text-warning"><i class="fa fa-user"></i> ' . $cek['nama'] . '</a>
                        </li>';
                    } else {
                        echo '
                        <li class="nav-item">
                        <a href="pages/auth/login.php" class="nav-link ms-3 text-warning"><i class="fa fa-sign-in"></i> Masuk</a>
                        </li>';
                    }
                    ?>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section w-100 h-100 d-flex">
        <div class="container my-auto">
            <div class="col-lg-6">
                <h1>Let's Explore Jawa Timur</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi aliquam nemo numquam dignissimos excepturi facere. Nulla laborum deleniti molestias incidunt?</p>
                <a href="#" class="btn btn-warning text-white">Cari Destinasi</a>
            </div>
        </div>
    </section>

    <div class="container mt-5">
        <!-- Kategori Wisata -->
        <section>
            <div class="row">
                <div class="col-lg-6 d-flex justify-content-center">
                    <img src="assets/ilustrasi.svg" alt="" class="w-75">
                </div>
                <div class="col-lg-6">
                    <h1 class="mt-5">Kenapa harus ke Jawa Timur?</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est in qui commodi vero nam molestiae incidunt impedit culpa. Assumenda, aperiam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est in qui commodi vero nam molestiae incidunt impedit culpa. Assumenda, aperiam.</p>
                </div>
            </div>
        </section>

        <!-- Kategori Wisata -->
        <section class='mb-5'>
            <div class="row">
                <div class="col-lg-4 d-flex flex-column align-items-center">
                    <img src="assets/mountain.png" alt="">
                    <h2>Wisata Alam</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <div class="col-lg-4 d-flex flex-column align-items-center">
                    <img src="assets/mountain.png" alt="">
                    <h2>Wisata Alam</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <div class="col-lg-4 d-flex flex-column align-items-center">
                    <img src="assets/mountain.png" alt="">
                    <h2>Wisata Alam</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
        </section>

        <section class='mb-5'>
            <div class="row">
                <div class="col-lg-3">
                    <div class="card text-white">
                        <img src="assets/kawahijen.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay d-flex justify-content-center">
                            <h5 class="card-text mt-auto">Kawah Ijen</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card text-white">
                        <img src="assets/kawahijen.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay d-flex justify-content-center">
                            <h5 class="card-text mt-auto">Kawah Ijen</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card text-white">
                        <img src="assets/kawahijen.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay d-flex justify-content-center">
                            <h5 class="card-text mt-auto">Kawah Ijen</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card text-white">
                        <img src="assets/kawahijen.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay d-flex justify-content-center">
                            <h5 class="card-text mt-auto">Kawah Ijen</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <h4 class='mb-4'>Artikel Menarik</h4>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="assets/pantaipapuma.jpg" class="card-img-top bg-secondary" style='height:200px;object-fit:cover' alt="...">
                        <div class="card-body">
                        <h5 class='mt-2'>Artikel Pertama</h5>
                        <span>Oleh <b>Admin</b> - 2021-02-06 11:50:33</span>
                        <p class="card-text text-truncate inline-block mt-4">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="assets/pantaipapuma.jpg" class="card-img-top bg-secondary" style='height:200px;object-fit:cover' alt="...">
                        <div class="card-body">
                        <h5 class='mt-2'>Artikel Kedua</h5>
                        <span>Oleh <b>Admin</b> - 2021-02-06 11:50:33</span>
                        <p class="card-text text-truncate inline-block mt-4">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="assets/pantaipapuma.jpg" class="card-img-top bg-secondary" style='height:200px;object-fit:cover' alt="...">
                        <div class="card-body">
                        <h5 class='mt-2'>Artikel Ketiga</h5>
                        <span>Oleh <b>Admin</b> - 2021-02-06 11:50:33</span>
                        <p class="card-text text-truncate inline-block mt-4">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer class="bg-success h-50 mt-5 py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="assets/logo-explore-jawa-timur.png" alt="" class="w-50">
                    <p class="text-white mt-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque totam nam ut qui voluptas voluptate numquam repellat omnis ea expedita?</p>
                </div>
                <div class="col-lg-6 d-flex flex-column align-items-end">
                    <div class="d-flex">
                        <a href="" class="text-decoration-none text-white me-3">Beranda</a>
                        <a href="" class="text-decoration-none text-white me-3">Destinasi</a>
                        <a href="" class="text-decoration-none text-white me-3">Artikel</a>
                        <a href="" class="text-decoration-none text-white me-3">Tentang</a>
                    </div>
                </div>
            </div>

        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>