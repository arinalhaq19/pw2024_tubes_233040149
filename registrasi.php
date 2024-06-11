<?php
require 'functions.php';

if (isset($_POST["register"])) {

  if (registrasi($_POST) > 0) {
    echo "<script>
            alert('user baru berhasil ditambahkan');
            document.location.href = 'login.php';
          </script>";
  } else {
    echo mysqli_error(koneksi());
  }
}


?>


<!DOCTYPE html>
<html>

<head>
  <title>Halaman Registrasi</title>
  <style>
    @font-face {
      font-family: 'eFootballStencil';
      src: url('assets/font/eFootballStencil-Regular.woff') format('woff');
    }

    body {
      font-family: 'efootballStencil', sans-serif;
      background-color: #1a1a1d;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background-image: url('assets/image/p.jfif');
      background-size: contain;
      /* background-position: center; */
    }

    .box {
      width: 100%;
      max-width: 400px;
      padding: 20px;
      background-color: rgba(0, 0, 0, 0.8);
      border-radius: 8px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
      color: #c5c6c7;
    }

    .container {
      text-align: center;
    }

    .top-header h1 {
      color: #66fcf1;
      margin-bottom: 20px;
      font-size: 24px;
    }

    form {
      width: 100%;
    }

    ul {
      list-style-type: none;
      padding: 0;
    }

    li {
      margin-bottom: 15px;
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
      color: #66fcf1;
      text-align: left;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #45a29e;
      border-radius: 4px;
      box-sizing: border-box;
      background-color: #1f2833;
      color: #c5c6c7;
    }

    input[type="text"]::placeholder,
    input[type="password"]::placeholder {
      color: #c5c6c7;
    }

    button[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #66fcf1;
      color: #1f2833;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s ease;
    }

    button[type="submit"]:hover {
      background-color: #45a29e;
    }
  </style>
</head>

<body>
  <div class="box">
    <div class="container">
      <div class="top-header">
        <h1>Halaman Registrasi</h1>
      </div>
      <form action="" method="POST">
        <ul>
          <li>
            <label for="username">username :</label>
            <input type="text" name="username" id="username" required>
          </li>
          <li>
            <label for="email">Email Address :</label>
            <input type="text" name="email" id="email" required>
          </li>
          <li>
            <label for="password">password :</label>
            <input type="password" name="password" id="password" required>
          </li>
          <li>
            <label for="password2">konfirmasi password : </label>
            <input type="password" name="password2" id="password2" required>
          </li>
          <li>
            <button type="submit" name="register">Register</button>
          </li>
        </ul>
      </form>
    </div>
  </div>
</body>

</html>