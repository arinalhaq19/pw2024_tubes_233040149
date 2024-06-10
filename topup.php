<?php

// session_start();

// if (!isset($_SESSION["login"])) {
//   header("location: login.php");
//   exit;
// }

require 'functions.php';

if (isset($_POST["order"])) {

  if (topup($_POST) > 0) {
    echo "<script>
            alert('data berhasil ditambahkan');
            document.location.href = 'index.php';
          </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- my css -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- bootstrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- icon bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <title>halaman top up</title>
</head>

<body class="oke d-flex2 flex-column min-vh-100">
  <!-- navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark  main-color">
    <div class="container">
      <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3">
        <a href="index.php" class="text-white text-decoration-none px-3 py-1 bg-primary rounded-4">Back</a>
      </div>
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
              <a class="nav-link" aria-current="page" href="index.php#home">Home</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="index.php#about">About</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="index.php#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- akhir navbar -->

  <!-- efootball -->
  <div class="wrapper pt-4">
    <div class="container">
      <br>
      <form id="form-order" class="form-horizontal mb-5" action="" method="POST">
        <div class="row">
          <div class="col-lg-4 mt-2 mb-2">
            <div class="row">
              <div class="col-12">
                <div class="card bg-dark shadow mt-3" style="width: 18rem;">
                  <div class="card-body">
                    <img alt class="shadow rounded bg-dark mx-auto mb-2 d-block" width="120" src="assets/image/siuuu7.jpg">
                    <div class="row">
                      <div class="col">
                        <h3 class="text-white text-center">Efootball Mobile</h3>
                        <div class="strip-primary"></div>
                        <br>
                        <p>
                          <strong class="text-white">Top Up Coins Efootball Mobile</strong>
                        </p>
                        <ol class="text-white">
                          <li>
                            Masukkan Nickname & Alamat Email (Anda)
                          </li>
                          <li>
                            Pilih Nominal Coins
                          </li>
                          <li>
                            Pilih Metode Pembayaran
                          </li>
                          <li>
                            Klik Beli Sekarang & lakukan Pembayaran
                          </li>
                          <li>
                            Coin masuk otomatis ke akun Anda.
                          </li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 mt-2 mb-2">
            <div class="row">
              <div class="col mt-3">
                <div class="card bg-dark shadow">
                  <div class="card-header" style="background-color: #232e35;">
                    <h5 class="card-title text-white text-center">
                      <!-- <i class="fa-regular fa-circle-1" aria-hidden="true"></i> -->
                      Lengkapi Data
                    </h5>
                  </div>
                  <div class="card-body">
                    <div id="userData">
                      <div class="row row-cols row-cols-md">
                        <div class="col-6">
                          <div class="form-group mt-3">
                            <label for="User ID">Nickname</label>
                            <input class="form-control" placeholder="Masukkan nikcname" type="text" name="nickname" id="nickname" required>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="form-group mt-3">
                            <label for="Email">Alamat Email</label>
                            <input class="form-control" placeholder="Masukkan Email" type="email" name="email" id="email" required>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col">
                <div class="card bg-dark shadow">
                  <div class="card-header" style="background-color: #232e35;">
                    <h5 class="card-title text-white text-center">
                      <!-- <i class="fa-regular fa-circle-2" aria-hidden="true"></i> -->
                      Pilih Nominal
                    </h5>
                  </div>
                  <div class="card-body">
                    <div id="tempatNominal">
                      <div class="row row-cols-2 row-cols-md-3 g-2">

                        <?php
                        $efootballs = query("SELECT * FROM efootball");
                        foreach ($efootballs as $efootball) : ?>
                          <div class="col-lg-4 mt-3">
                            <div class="list-group shadow h-100">
                              <input type="radio" name="jumlah" id="jumlah" value="<?= $efootball['id_efootball'] ?>">
                              <label for="produk-4246" class="list-group-item h-100">
                                <div class="row">
                                  <div class="col">
                                    <div class="row">
                                      <div class="col name-produk" style="font-weight: 600;"><?= $efootball['coin'] ?> Coins</div>
                                    </div>
                                    <div class="row">
                                      <div class="col" style="font-size: 10px; font-weight:100">Rp. <?= $efootball['harga'] ?></div>
                                    </div>
                                  </div>
                                </div>
                              </label>
                            </div>
                          </div>
                        <?php endforeach; ?>


                        <!-- <div class="col-lg-4 mt-3">
                          <div class="list-group shadow h-100">
                            <input type="radio" name="jumlah" id="jumlah" value="65000">
                            <label for="produk-11507" class="list-group-item h-100">
                              <div class="row">
                                <div class="col">
                                  <div class="row">
                                    <div class="col name-prod" style="font-weight: 600;">550 Coins</div>
                                  </div>
                                  <div class="row">
                                    <div class="col" style="font-size: 10px; font-weight: 100;">Rp. 65.000</div>
                                  </div>
                                </div>
                              </div>
                            </label>
                          </div>
                        </div>


                        <div class="col-lg-4 mt-3">
                          <div class="list-group shadow h-100">
                            <input type="radio" name="jumlah" id="jumlah">
                            <label for="produk-4290" class="list-group-item h-100">
                              <div class="row">
                                <div class="col">
                                  <div class="row">
                                    <div class="col name-prod" style="font-weight: 600;">1.040 Coins</div>
                                  </div>
                                  <div class="row">
                                    <div class="col" style="font-size: 10px; font-weight: 100;">Rp. 129.000</div>
                                  </div>
                                </div>
                              </div>
                            </label>
                          </div>
                        </div>


                        <div class="col-lg-4 mt-3">
                          <div class="list-group shadow h-100">
                            <input type="radio" name="jumlah" id="jumlah">
                            <label for="produk-11526" class="list-group-item h-100">
                              <div class="row">
                                <div class="col">
                                  <div class="row">
                                    <div class="col name-prod" style="font-weight: 600;">2.130 Coins</div>
                                  </div>
                                  <div class="row">
                                    <div class="col" style="font-size: 10px; font-weight: 100;">Rp. 249.000</div>
                                  </div>
                                </div>
                              </div>
                            </label>
                          </div>
                        </div>


                        <div class="col-lg-4 mt-3">
                          <div class="list-group shadow h-100">
                            <input type="radio" name="jumlah" id="jumlah">
                            <label for="produk-4308" class="list-group-item h-100">
                              <div class="row">
                                <div class="col">
                                  <div class="row">
                                    <div class="col name-prod" style="font-weight: 600;">3.250 Coins</div>
                                  </div>
                                  <div class="row">
                                    <div class="col" style="font-size: 10px; font-weight: 100;">Rp. 359.000</div>
                                  </div>
                                </div>
                              </div>
                            </label>
                          </div>
                        </div>


                        <div class="col-lg-4 mt-3">
                          <div class="list-group shadow h-100">
                            <input type="radio" name="jumlah" id="jumlah">
                            <label for="produk-4332" class="list-group-item h-100">
                              <div class="row">
                                <div class="col">
                                  <div class="row">
                                    <div class="col name-prod" style="font-weight: 600;">5.700 Coins</div>
                                  </div>
                                  <div class="row">
                                    <div class="col" style="font-size: 10px; font-weight: 100;">Rp. 619.000</div>
                                  </div>
                                </div>
                              </div>
                            </label>
                          </div>
                        </div>


                        <div class="col-lg-4 mt-3">
                          <div class="list-group shadow h-100">
                            <input type="radio" name="jumlah" id="jumlah">
                            <label for="produk-4342" class="list-group-item h-100">
                              <div class="row">
                                <div class="col">
                                  <div class="row">
                                    <div class="col name-prod" style="font-weight: 600;">12.800 Coins</div>
                                  </div>
                                  <div class="row">
                                    <div class="col" style="font-size: 10px; font-weight: 100;">Rp. 1.299.0000</div>
                                  </div>
                                </div>
                              </div>
                            </label>
                          </div>
                        </div> -->


                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mt-3">
              <div class="col">
                <div class="card bg-dark shadow">
                  <div class="card-header" style="background-color: #232e35;">
                    <h5 class="card-title text-white text-center">Pilih Metode Pembayaran</h5>
                  </div>
                  <div class="card-body">
                    <div class="area-list-payment-method">
                      <div class="child-box payment-drawwer shadow" id="virtual-account">

                        <div class="header short-payment-support-info-head" onclick="openpayment(this)">
                          <div class="left p-3" style="background-color: #232e35;">
                            <b class="text-white">Virtual Account</b>
                          </div>
                        </div>

                        <div class="button-action-payment" style="display: block;">
                          <div class="row row-cols-md-3 p-1">

                            <div class="col-lg-4 p-1 h-100">
                              <ul class="list-group h-100">
                                <li>
                                  <input type="radio" name="metode" id="metode" value="sinarmas">
                                  <label for="metode-66" class="payment-item">

                                    <div class="info-top">
                                      <div>
                                        <img alt width="60px" src="assets/image/virtual account/sinarmas.png">
                                      </div>
                                      <b class="d-block" id="payment-66" data-harga style="font-size: 11px;"></b>
                                    </div>

                                    <div class="info-bottom text-sm-left text-white">
                                      <b>Sinarmas Virtual Account</b>
                                      <br>
                                      <p class="cekstore-cek" id="payment">Dicek Otomatis ( 5 Menit - 30 Menit )</p>
                                    </div>

                                  </label>
                                </li>
                              </ul>
                            </div>

                            <div class="col-lg-4 p-1 h-100">
                              <ul class="list-group h-100">
                                <li>
                                  <input type="radio" name="metode" id="metode" value="bni">
                                  <label for="metode" class="payment-item">

                                    <div class="info-top">
                                      <div>
                                        <img alt width="60px" src="assets/image/virtual account/bni.png">
                                      </div>
                                      <b class="d-block" id="payment" data-harga style="font-size: 11px;"></b>
                                    </div>

                                    <div class="info-bottom text-sm-left text-white">
                                      <b>BNI Virtual Account</b>
                                      <br>
                                      <p class="cekstore-cek" id="payment">Dicek Otomatis ( 5 Menit - 30 Menit )</p>
                                    </div>

                                  </label>
                                </li>
                              </ul>
                            </div>

                            <div class="col-lg-4 p-1 h-100">
                              <ul class="list-group h-100">
                                <li>
                                  <input type="radio" name="metode" id="metode" value="bri">
                                  <label for="metode-60" class="payment-item">

                                    <div class="info-top">
                                      <div>
                                        <img alt width="60px" src="assets/image/virtual account/bri.png">
                                      </div>
                                      <b class="d-block" id="payment-60" data-harga style="font-size: 11px;"></b>
                                    </div>

                                    <div class="info-bottom text-sm-left text-white">
                                      <b>BRI Virtual Account</b>
                                      <br>
                                      <p class="cekstore-cek" id="payment">Dicek Otomatis ( 5 Menit - 30 Menit )</p>
                                    </div>

                                  </label>
                                </li>
                              </ul>
                            </div>

                            <div class="col-lg-4 p-1 h-100">
                              <ul class="list-group h-100">
                                <li>
                                  <input type="radio" name="metode" id="metode" value="maybank">
                                  <label for="metode-65" class="payment-item">

                                    <div class="info-top">
                                      <div>
                                        <img alt width="60px" src="assets/image/virtual account/maybank.png">
                                      </div>
                                      <b class="d-block" id="payment-65" data-harga style="font-size: 11px;"></b>
                                    </div>

                                    <div class="info-bottom text-sm-left text-white">
                                      <b>Maybank Virtual Account</b>
                                      <br>
                                      <p class="cekstore-cek" id="payment">Dicek Otomatis ( 5 Menit - 30 Menit )</p>
                                    </div>

                                  </label>
                                </li>
                              </ul>
                            </div>

                            <div class="col-lg-4 p-1 h-100">
                              <ul class="list-group h-100">
                                <li>
                                  <input type="radio" name="metode" id="metode" value="mandiri">
                                  <label for="metode-58" class="payment-item">

                                    <div class="info-top">
                                      <div>
                                        <img alt width="60px" src="assets/image/virtual account/mandiri.png">
                                      </div>
                                      <b class="d-block" id="payment-58" data-harga style="font-size: 11px;"></b>
                                    </div>

                                    <div class="info-bottom text-sm-left text-white">
                                      <b>Mandiri Virtual Account</b>
                                      <br>
                                      <p class="cekstore-cek" id="payment">Dicek Otomatis ( 5 Menit - 30 Menit )</p>
                                    </div>

                                  </label>
                                </li>
                              </ul>
                            </div>

                          </div>

                        </div>

                        <!-- <div class="short-payment-support-info p-3" onclick="openpayment(this)">

                          <img class="m-1" id="IMG" style="background-color: white; border-radius: 3px; height: 20px; padding: 3px;" src="assets/image/virtual account/sinarmas.png">
                          <img class="m-1" id="IMG" style="background-color: white; border-radius: 3px; height: 20px; padding: 3px;" src="assets/image/virtual account/bni.png">
                          <img class="m-1" id="IMG" style="background-color: white; border-radius: 3px; height: 20px; padding: 3px;" src="assets/image/virtual account/bri.png">
                          <img class="m-1" id="IMG" style="background-color: white; border-radius: 3px; height: 20px; padding: 3px;" src="assets/image/virtual account/maybank.png">
                          <img class="m-1" id="IMG" style="background-color: white; border-radius: 3px; height: 20px; padding: 3px;" src="assets/image/virtual account/mandiri.png">

                          <a class="open-button-action-payment">
                            <i class="bi bi-chevron-down" aria-hidden="true"></i>
                          </a>

                        </div> -->


                      </div>

                      <div class="child-box payment-drawwer shadow mt-3" id="minimarket">

                        <div class="header short-payment-support-info-head" onclick="openpayment(this)">
                          <div class="left p-3" style="background-color: #232e35;">
                            <b class="text-white">Minimarket</b>
                          </div>
                        </div>

                        <div class="button-action-payment" style="display: block;">
                          <div class="row row-cols-md-3 p-1">

                            <div class="col-lg-4 p-1 h-100">
                              <ul class="list-group h-100">
                                <li>
                                  <input type="radio" name="metode" id="metode" value="indomaret">
                                  <label for="metode-57" class="payment-item">

                                    <div class="info-top">
                                      <div>
                                        <img alt width="60px" src="assets/image/convenience store/indomaret.png">
                                      </div>
                                      <b class="d-block" id="payment-57" data-harga style="font-size: 11px;"></b>
                                    </div>

                                    <div class="info-bottom text-sm-left text-white">
                                      <b>Indomaret</b>
                                      <br>
                                      <p class="cekstore-cek" id="payment">Dicek Otomatis ( 5 Menit - 30 Menit )</p>
                                    </div>

                                  </label>
                                </li>
                              </ul>
                            </div>

                            <div class="col-lg-4 p-1 h-100">
                              <ul class="list-group h-100">
                                <li>
                                  <input type="radio" name="metode" id="metode" value="alfamart">
                                  <label for="metode-55" class="payment-item">

                                    <div class="info-top">
                                      <div>
                                        <img alt width="60px" src="assets/image/convenience store/alfamart.png">
                                      </div>
                                      <b class="d-block" id="payment-55" data-harga style="font-size: 11px;"></b>
                                    </div>

                                    <div class="info-bottom text-sm-left text-white">
                                      <b>Alfamaret</b>
                                      <br>
                                      <p class="cekstore-cek" id="payment">Dicek Otomatis ( 5 Menit - 30 Menit )</p>
                                    </div>

                                  </label>
                                </li>
                              </ul>
                            </div>

                            <div class="col-lg-4 p-1 h-100">
                              <ul class="list-group h-100">
                                <li>
                                  <input type="radio" name="metode" id="metode" value="alfamidi">
                                  <label for="metode-56" class="payment-item">

                                    <div class="info-top">
                                      <div>
                                        <img alt width="60px" src="assets/image/convenience store/alfamidi.png">
                                      </div>
                                      <b class="d-block" id="payment-56" data-harga style="font-size: 11px;"></b>
                                    </div>

                                    <div class="info-bottom text-sm-left text-white">
                                      <b>Alfamidi</b>
                                      <br>
                                      <p class="cekstore-cek" id="payment">Dicek Otomatis ( 5 Menit - 30 Menit )</p>
                                    </div>

                                  </label>
                                </li>
                              </ul>
                            </div>

                          </div>
                        </div>

                        <!-- <div class="short-payment-support-info p-3" onclick="openpayment(this)">

                          <img class="m-1" id="IMG" style="background-color: white; border-radius: 3px; height: 20px; padding: 3px;" src="assets/image/convenience store/indomaret.png">
                          <img class="m-1" id="IMG" style="background-color: white; border-radius: 3px; height: 20px; padding: 3px;" src="assets/image/convenience store/alfamart.png">
                          <img class="m-1" id="IMG" style="background-color: white; border-radius: 3px; height: 20px; padding: 3px;" src="assets/image/convenience store/alfamidi.png">

                          <a class="open-button-action-payment">
                            <button id="togglebutton">
                              <i class="bi bi-chevron-down" aria-hidden="true"></i>
                            </button>
                          </a>


                        </div> -->


                      </div>

                      <div class="child-box payment-drawwer shadow mt-3" id="E-wallet">

                        <div class="header short-payment-support-info-head" onclick="openpayment(this)">
                          <div class="left p-3" style="background-color: #232e35;">
                            <b class="text-white">E-wallet</b>
                          </div>
                        </div>

                        <div class="button-action-payment" style="display: block;">
                          <div class="row row-cols-md-3 p-1">

                            <div class="col-lg-4 p-1 h-100">
                              <ul class="list-group h-100">
                                <li>
                                  <input type="radio" name="metode" id="metode" value="dana">
                                  <label for="metode-72" class="payment-item">

                                    <div class="info-top">
                                      <div>
                                        <img alt width="60px" src="assets/image/e-wallet/dana.png">
                                      </div>
                                      <b class="d-block" id="payment-72" data-harga style="font-size: 11px;"></b>
                                    </div>

                                    <div class="info-bottom text-sm-left text-white">
                                      <b>Dana</b>
                                      <br>
                                      <p class="cekstore-cek" id="payment">Dicek Manual ( 5 Menit - 30 Menit )</p>
                                    </div>

                                  </label>
                                </li>
                              </ul>
                            </div>

                            <div class="col-lg-4 p-1 h-100">
                              <ul class="list-group h-100">
                                <li>
                                  <input type="radio" name="metode" id="metode" value="gopay">
                                  <label for="metode-73" class="payment-item">

                                    <div class="info-top">
                                      <div>
                                        <img alt width="60px" src="assets/image/e-wallet/gopay.png">
                                      </div>
                                      <b class="d-block" id="payment-73" data-harga style="font-size: 11px;"></b>
                                    </div>

                                    <div class="info-bottom text-sm-left text-white">
                                      <b>Gopay</b>
                                      <br>
                                      <p class="cekstore-cek" id="payment">Dicek Manual ( 5 Menit - 30 Menit )</p>
                                    </div>

                                  </label>
                                </li>
                              </ul>
                            </div>

                            <div class="col-lg-4 p-1 h-100">
                              <ul class="list-group h-100">
                                <li>
                                  <input type="radio" name="metode" id="metode" value="ovo">
                                  <label for="metode-77" class="payment-item">

                                    <div class="info-top">
                                      <div>
                                        <img alt width="60px" src="assets/image/e-wallet/ovo.png">
                                      </div>
                                      <b class="d-block" id="payment-77" data-harga style="font-size: 11px;"></b>
                                    </div>

                                    <div class="info-bottom text-sm-left text-white">
                                      <b>ovo</b>
                                      <br>
                                      <p class="cekstore-cek" id="payment">Dicek Manual ( 5 Menit - 30 Menit )</p>
                                    </div>

                                  </label>
                                </li>
                              </ul>
                            </div>

                          </div>

                        </div>

                        <!-- <div class="short-payment-support-info p-3" onclick="openpayment(this)">

                          <img class="m-1" id="IMG" style="background-color: white; border-radius: 3px; height: 20px; padding: 3px;" src="assets/image/e-wallet/dana.png">
                          <img class="m-1" id="IMG" style="background-color: white; border-radius: 3px; height: 20px; padding: 3px;" src="assets/image/e-wallet/gopay.png">
                          <img class="m-1" id="IMG" style="background-color: white; border-radius: 3px; height: 20px; padding: 3px;" src="assets/image/e-wallet/ovo.png">

                          <a class="open-button-action-payment">
                            <i class="bi bi-chevron-down" aria-hidden="true"></i>
                          </a>
                        </div> -->


                      </div>


                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mt-3">
              <div class="col">
                <div class="card bg-dark shadow">

                  <div class="card-header" style="background-color: #232e35;">
                    <h5 class="card-title text-white text-center">Konfirmasi Pembayaran</h5>
                  </div>

                  <div class="card-body">

                    <!-- <div class="form-group mb-3">
                      <label for="wa">Nomor Whatsapp</label>
                      <input class="form-control" placeholder="Nomor Whatsapp [628xxxxx]" type="number" name="wa" id="wa" required>
                    </div> -->

                    <div class="w-100">
                      <button type="submit" name="order" class="btn btn-primary w-100 btn-lg">
                        <i class="bi bi-cart-plus"></i>
                        Order Now
                      </button>
                    </div>

                  </div>

                </div>
              </div>
            </div>


          </div>
      </form>
    </div>
  </div>



  <!-- sosmed -->
  <div class="contaner-fluid py-5 content-sosialmedia text-light main-color">
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
  <!-- akhir sosmed -->

  <!-- footer -->
  <div class="container-fluid py-3 text-light">
    <div class="container text-center">
      <label>&copy;2024 Efootball mobile</label>
      <label>Created by Arinal</label>
    </div>
  </div>
  <!-- akhir footer -->



  <script src="assets/js/script.js"></script>

  <!-- bootstrap js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- gsap -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
  <script>
    gsap.from('.navbar', {
      duration: 1.5,
      y: '-100%',
      opacity: 0,
      ease: 'bounce'
    });
  </script> -->
</body>

</html>