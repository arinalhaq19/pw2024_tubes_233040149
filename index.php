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
    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- my css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- icon bootsrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <title>Efootball | Top-up</title>
</head>

<body class="vh-100 awal">
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark  main-color">
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
                            <a class="nav-link" href="topup.php">Top up</a>
                        </li>
                    </ul>
                    <!-- Login | Sign up -->
                    <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3">
                        <a href="logout.php" class="text-white text-decoration-none">logout</a>
                        <a href="registrasi.php" class="text-white text-decoration-none px-3 py-1 bg-primary rounded-4">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->

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
    <!-- akhir banner -->

    <!-- about -->
    <section class="about" style="background-color: #1c1f2a" id="about">
        <div class="container-fluid py-5">
            <div class="about" data-aos="fade-down" data-aos-offset="300" data-aos-duration="2000">
                <div class="header-text">
                    <h1 class="text-center text-white mt-5">About Us</h1>
                </div>

                <div class="text-white card-home mt-5">
                    <div class="card-body">
                        <div class="about text-center mt-5">
                            <h3>Efootball Store : Website top-up terbesar, tercepat dan terpercaya di Indonesia</h3>
                            <p>Setiap bulannya, jutaan gamers menggunakan efootball Store untuk melakukan pembelian coin game dengan instan</p>
                        </div>
                    </div>
                </div>

            </div>


            <div class="row justify-content-center">
                <div class="col-md-3 ">

                    <div class="text-white card-home mt-5 p-4" data-aos="flip-left" data-aos-duration="1000">
                        <div class="icon text-center">
                            <i class="bi bi-stopwatch" style="font-size: 2rem;"></i>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title text-center">Bayar Hitungan Detik</h4><br>
                            <p class="card-text text-center">
                                Dibutuhkan beberapa detik saja untuk menyelesaikan pembayaran, karena situs kami berfungsi dengan baik dan mudah untuk digunakan.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">

                    <div class="text-white card-home mt-5 p-4" data-aos="flip-left" data-aos-duration="1000">
                        <div class="icon text-center">
                            <i class="bi bi-wallet2" style="font-size: 2rem;"></i>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title text-center">Metode Pembayaran Terbaik</h4>
                            <p class="card-text text-center">
                                Kami menawarkan begitu banyak pilihan pembayaran mulai dari dana, gopay, ovo
                                dan pembayaran di mini market terdekat.
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-3">

                    <div class="text-white card-home mt-5 p-4" data-aos="flip-left" data-aos-duration="1000">
                        <div class="icon text-center">
                            <i class="bi bi-coin" style="font-size: 2rem;"></i>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title text-center">Pengiriman Instan</h4>
                            <p class="card-text text-center">
                                Ketika kamu melakukan top-up di sini, item atau barang yang kamu beli akan selalu dikirim
                                ke akun kamu secara instan dan cepat tanpa tertunda.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">

                    <div class="text-white card-home mt-5 p-4" data-aos="flip-left" data-aos-duration="1000">
                        <div class="icon text-center">
                            <i class="bi bi-headset" style="font-size: 2rem;"></i>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title text-center">Layanan Pelanggan cepat & ramah</h4><br>
                            <p class="card-text text-center">
                                Kami selalu siap membantumu kapanpun dan di manapun.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- akhir about -->

    <!-- contact -->
    <section id="contact">
        <div class="container-fluid py-5 main-color">
            <div class="container" data-aos="zoom-in" data-aos-offset="400" data-aos-duration="1000">
                <h1 class="text-center text-white mt-5">Contact Us</h1>

                <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
                    <strong>Terima Kasih!</strong> Pesan anda sudah kami terima.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                <form class="col-md-8 offset-md-2 col-lg-6 offset-lg-3 mt-5 text-white" name="contact-form">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Pesan</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="pesan"></textarea>
                    </div>
                    <div>
                        <button class="bg-primary px-3 py-1 w-100 rounded-2 text-white btn-kirim" type="submit">Kirim</button>

                        <button class="btn btn-primary px-3 py-1 w-100 rounded-2 text-white btn-loading d-none" type="button" disabled>
                            <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                            <span role="status">Loading...</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- akhir contact -->

    <!-- social media -->
    <div class="contaner-fluid py-5 content-sosialmedia text-light">
        <div class="container" data-aos="fade-up">
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
                        <i class="bi bi-instagram fs-4" style="color: #8a3ab9;"></i>
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
    <!-- akhir sosmed -->

    <!-- footer -->
    <div class="container-fluid py-3 text-light main-color">
        <div class="container text-center">
            <label>&copy;2024 Efootball mobile</label>
            <label>Created by Arinal</label>
        </div>
    </div>
    <!-- akhir footer -->

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbzy_jbOXnga_0F-2jVgHqheNX5uVxk5w1WR0AgP6kfDFCMZaeEHYPNxM2nNf2UgFwYb6w/exec'
        const form = document.forms['contact-form']
        const btnKirim = document.querySelector('.btn-kirim');
        const btnLoading = document.querySelector('.btn-loading');
        const myAlert = document.querySelector('.my-alert');

        form.addEventListener('submit', e => {
            e.preventDefault()
            // ketika tombol submit di klik
            // tampilkan tombol loading, hilangkan tombol kirim
            btnLoading.classList.toggle('d-none');
            btnKirim.classList.toggle('d-none');
            fetch(scriptURL, {
                    method: 'POST',
                    body: new FormData(form)
                })
                .then(response => {
                    // tampilkan tombol kirim, hilangkan tombol loading
                    btnLoading.classList.toggle('d-none');
                    btnKirim.classList.toggle('d-none');
                    // tampilkan alert
                    myAlert.classList.toggle('d-none');
                    // reset formnya
                    form.reset();
                    console.log('Success!', response)
                })
                .catch(error => console.error('Error!', error.message))
        })
    </script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script>
        gsap.from('.navbar', {
            duration: 1.5,
            y: '-100%',
            opacity: 0,
            ease: 'bounce'
        });
        gsap.from('.icon-sosmed i', {
            duration: 1,
            rotateY: 360,
            opacity: 0,
        });
    </script> -->
</body>


</html>