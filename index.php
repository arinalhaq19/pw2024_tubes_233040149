<?php
// session_start();

// if (!isset($_SESSION["login"])) {
//     header("location: login.php");
//     exit;
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- font Awesome For icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <!-- animasi scroll -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Efootball | Top-up</title>
</head>

<body class="vh-100">
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark main-color">
        <div class="container">
            <!-- Logo -->
            <img src="assets/image/ifel-logo-putih.png" class="hello">
            <a class="navbar-brand fs-4" href="#"></a>
            <!-- toogle btn -->
            <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- SideBar -->
            <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <!-- Sidebar Header -->
                <div class="offcanvas-header text-white border-bottom">
                    <h6 class="offcanvas-title" id="offcanvasNavbarLabel">Top up</h6>
                    <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <!-- Sidebar Body -->
                <div class="offcanvas-body d-flex flex-column flex-lg-row p-4 p-lg-0">
                    <ul class="navbar-nav justify-content-center align-items-center fs-5 flex-grow-1 pe-3">
                        <li class="nav-item mx-2">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#login">Top up</a>
                        </li>
                    </ul>
                    <!-- Login | Sign up -->
                    <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3">
                        <a href="login.php" class="text-white text-decoration-none">Login</a>
                        <a href="registrasi.php" class="text-white text-decoration-none px-3 py-1 bg-primary rounded-4">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- banner -->
    <section id="home">
        <div class="container-slides">
            <div id="carouselExampleSlidesonly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/image/messibigtime.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/image/bluelock.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/image/gameplay.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/image/messilogin.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- about -->
    <section class="about" style="background-color: #1c1f2a" id="about">
        <div class="container-fluid py-5">
            <div class="about">
                <div class="header-text">
                    <h1 class="text-center text-white mt-5">About Us</h1>
                </div>

                <div class="text-white card-home mt-5">
                    <div class="card-body">
                        <div class="about text-center mt-5">
                            <h3>Efootball Store : Website top-up terbesar, tercepat dan terpercaya di Indonesia</h3>
                            <p>Setiap bulannya, jutaan gamers menggunakan efootball Store untuk melakukan pembelian kredit game dengan instan</p>
                        </div>
                    </div>
                </div>

            </div>


            <div class="row justify-content-center">
                <div class="col-lg-4">

                    <div class="text-white card-home mt-5 p-4" style="width: 18rem;">
                        <div class="icon text-center">
                            <i class="bi bi-stopwatch" style="font-size: 2rem;"></i>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Bayar Hitungan Detik</h4><br>
                            <p class="card-text">
                                Dibutuhkan beberapa detik saja untuk menyelesaikan pembayaran, karena situs kami berfungsi dengan baik dan mudah untuk digunakan.
                            </p>
                        </div>
                    </div>


                    <div class="text-white card-home mt-5 p-4" style="width: 18rem;">
                        <div class="icon text-center">
                            <i class="bi bi-wallet2" style="font-size: 2rem;"></i>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Metode Pembayaran Terbaik</h4>
                            <p class="card-text">
                                Kami menawarkan begitu banyak pilihan pembayaran mulai dari dana, gopay, ovo
                                dan pembayaran di mini market terdekat.
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4">

                    <div class="text-white card-home mt-5 p-4" style="width: 18rem;">
                        <div class="icon text-center">
                            <i class="bi bi-gem" style="font-size: 2rem;"></i>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Pengiriman Instan</h4><br>
                            <p class="card-text">
                                Ketika kamu melakukan top-up di sini, item atau barang yang kamu beli akan selalu dikirim
                                ke akun kamu secara instan dan cepat, tanpa tertunda.
                            </p>
                        </div>
                    </div>
                    <div class="text-white card-home mt-5 p-4" style="width: 18rem;">
                        <div class="icon text-center">
                            <i class="bi bi-headset" style="font-size: 2rem;"></i>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Layanan Pelanggan cepat & ramah</h4><br>
                            <p class="card-text">
                                Kami selalu siap membantumu kapanpun dan di manapun.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact -->
    <section id="contact">
        <div class="container-fluid py-5 main-color">
            <div class="container">
                <h1 class="text-center text-white mt-5">Contact Us</h1>

                <form class="col-md-8 offset-md-2 col-lg-6 offset-lg-3 mt-5 text-white">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="text" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Pesan</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                    </div>
                    <div>
                        <button class="bg-primary px-3 py-1 w-100 rounded-2 text-white">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- social media -->
    <div class="contaner-fluid py-5 content-sosialmedia text-light">
        <div class="container">
            <h5 class="text-center mb-4">Temui Kami</h5>
            <div class="row justify-content-center">
                <div class="col-sm-1 d-flex justify-content-center mb-2 icon-sosmed">
                    <a href="https://www.whatsapp.com/">
                        <i class="bi bi-whatsapp fs-4" style="color: green;"></i>
                    </a>
                </div>
                <div class="col-sm-1 d-flex justify-content-center mb-2 icon-sosmed">
                    <a href="https://www.facebook.com/">
                        <i class="bi bi-facebook fs-4" style="color: blue;"></i>
                    </a>
                </div>
                <div class="col-sm-1 d-flex justify-content-center mb-2 icon-sosmed">
                    <a href="https://www.instagram.com/">
                        <i class="bi bi-instagram fs-4" style="color: #3F4E57;"></i>
                    </a>
                </div>
                <div class="col-sm-1 d-flex justify-content-center icon-sosmed">
                    <a href="https://www.youtube.com/">
                        <i class="bi bi-youtube fs-4" style="color: red;"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="container-fluid py-3 text-light main-color">
        <div class="container text-center">
            <label>&copy;2024 Efootball mobile</label>
            <label>Created by Arinal</label>
        </div>
    </div>

    <!-- logo footer-->
    <!-- <script src="https//unpkg..com/@phosphor-icons/web"></script> -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>


</html>