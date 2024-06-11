<?php
// session_start();
require 'functions.php';

// if (isset($_POST["login"])) {

//   $username = $_POST["username"];
//   $password = $_POST["password"];


//   $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");



//   // cek username
//   if (mysqli_num_rows($result) === 1) {
//     $user = mysqli_fetch_assoc($result);

//     if ($user['id_role'] == 1) {
//       header("Location: admin/dashboard.php");
//       exit;
//     } else if ($user['id_role'] == 2) {
//       header("Location: index.php");
//       exit;
//     } else {
//       echo "Password salah.";
//     }

//     // cek password
//     $row = mysqli_fetch_assoc($result);
//     if (password_verify($password, $row["password"])) {
//       // set session
//       // $_SESSION["login"] = true;

//       header("location: index.php");
//       exit;
//     }
//   }

//   $error = true;
// }
// if (isset($_POST["login"])) {

//   // Ambil input dan sanitasi
//   $username = mysqli_real_escape_string(koneksi(), $_POST["username"]);
//   $password = mysqli_real_escape_string(koneksi(), $_POST["password"]);

//   // Buat query untuk mendapatkan user berdasarkan username
//   $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");

//   // Cek apakah username ditemukan
//   if (mysqli_num_rows($result) === 1) {
//     $user = mysqli_fetch_assoc($result);

//     // Cek password menggunakan password_verify
//     if (password_verify($password, $user["password"])) {
//       // Cek role
//       if ($user['id_role'] == 1) {
//         header("Location: admin/dashboard.php");
//         exit;
//       } else if ($user['id_role'] == 2) {
//         header("Location: index.php");
//         exit;
//       }
//     } else {
//       echo "Password salah.";
//     }
//   } else {
//     echo "Username salah atau tidak ditemukan.";
//   }

//   $error = true;
// }
if (isset($_POST["login"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  login($username, $password);
}

$error = true;
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Halaman Login</title>
  <style>
    @font-face {
      font-family: 'eFootballStencil';
      src: url('assets/font/eFootballStencil-Regular.woff') format('woff');
    }

    body {
      font-family: 'efootballStencil', sans-serif;
      background-image: url('assets/image/stik.jpg');
      background-size: contain;
      /* background-repeat: no-repeat; */
      background-position: center;
      /* background-attachment: fixed; */
    }

    .box {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 90vh;
    }

    .container {
      width: 350px;
      display: flex;
      flex-direction: column;
      padding: 15px;
      background: rgba(0, 0, 0, 0.8);
      border-radius: 8px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
      color: #c5c6c7;
    }

    header {
      color: #66fcf1;
      font-size: 30px;
      display: flex;
      justify-content: center;
      padding: 0 0 15px 0;
    }

    .input-field {
      display: flex;
      flex-direction: column;
      margin-bottom: 15px;
    }

    .input-field input {
      height: 45px;
      width: 100%;
      border: none;
      outline: none;
      border-radius: 4px;
      color: #fff;
      padding-left: 15px;
      background: rgba(255, 255, 255, 0.1);
      box-sizing: border-box;
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
      color: #66fcf1;
      text-align: left;
    }

    ::placeholder {
      color: #c5c6c7;
    }

    a.forgot,
    a.sign-up {
      text-align: center;
      text-decoration: none;
      color: rgba(255, 255, 255, 0.712);
      display: block;
      margin-bottom: 15px;
    }

    a.forgot:hover,
    a.sign-up:hover {
      text-decoration: underline;
      color: #fffffffd;
    }

    .submit {
      border: none;
      border-radius: 4px;
      font-size: 15px;
      height: 45px;
      outline: none;
      width: 100%;
      background: #66fcf1;
      color: #1f2833;
      cursor: pointer;
      transition: 0.3s;
    }

    .submit:hover {
      background: #45a29e;
    }
  </style>
</head>

<body>
  <div class="box">
    <div class="container">
      <div class="top-header">
        <header>Efootball</header>
      </div>
      <form action="" method="post">
        <div class="input-field">
          <label for="username">username :</label>
          <input type="text" name="username" id="username" required autofocus autocomplete="off" />
          <i class="bx bx-user"></i>
        </div>
        <div class="input-field">
          <label for="password">password :</label>
          <input type="password" name="password" id="password" required />
          <i class="bx bx-lock-alt"></i>
        </div>
        <a href="#" class="forgot">
          <p class="forgot">Forgot password</p>
        </a>
        <div class="input-field">
          <button type="submit" class="submit" name="login">Login</button>
        </div>
        <p style="color: #fff; text-align: center;">Don't have an account? <a href="registrasi.php" class="sign-up">register</a></p>
      </form>
    </div>
  </div>
</body>

</html>