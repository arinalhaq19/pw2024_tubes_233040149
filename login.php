<?php
// session_start();
require 'functions.php';

if (isset($_POST["login"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");



  // cek username
  if (mysqli_num_rows($result) === 1) {

    // cek password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])) {
      // set session
      // $_SESSION["login"] = true;

      header("location: index.php");
      exit;
    }
  }

  $error = true;
}


?>
<!DOCTYPE html>
<html>

<head>
  <title>Halaman Login</title>
  <style>
    body {
      background-image: url(assets/image/stik.jpg);
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      background-attachment: fixed;
      font-family: 'efootballStencil-Reguler', sans-serif;
      src: url(assets/font/eFootballStencil-Regular.woff) format('woff');
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
      padding: 0 15px 0 15px;
    }

    header {
      color: #fff;
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
      width: 87%;
      border: none;
      outline: none;
      border-radius: 30px;
      color: #fff;
      padding: 0 0 0 42px;
      background: rgba(255, 255, 255, 0.1);
    }

    i {
      position: relative;
      top: -31px;
      left: 17px;
      color: #fff;
    }

    ::-webkit-input-placeholder {
      color: #fff;
    }

    a.forgot {
      text-align: center;
      text-decoration: none;
      position: relative;
      color: rgb(255, 255, 255, 0.712);

    }

    a.forgot:hover {
      text-decoration: underline;
      color: #fffffffd;
    }

    a.sign-up {
      text-decoration: none;
      color: rgb(255, 255, 255, 0.712);
    }

    a.sign-up:hover {
      text-decoration: underline;
      color: #fffffffd;
    }

    p {
      cursor: default;
    }

    p.forgot {
      cursor: pointer;
    }

    .submit {
      border: none;
      border-radius: 30px;
      font-size: 15px;
      height: 45px;
      outline: none;
      width: 100%;
      background: rgba(255, 255, 255, 0.7);
      cursor: pointer;
      transition: 0.3s;
    }

    .submit:hover {
      box-shadow: 1px 5px 7px 1px rgba(0, 0, 0, 0.2);
    }
  </style>
</head>

<?php if (isset($error)) : ?>
  <p style="color: red; font-style: italic; text-align: center;">username / password salah</p>
<?php endif; ?>

<body>
  <div class="box">
    <div class="container">
      <div class="top-header">
        <header>Efootball</header>
      </div>
      <form action="" method="post">
        <div class="input-field">
          <input type="text" name="username" id="username" placeholder="username . . ." required />
          <i class="bx bx-user"></i>
        </div>
        <div class="input-field">
          <input type="password" name="password" id="password" placeholder="password . . ." required />
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