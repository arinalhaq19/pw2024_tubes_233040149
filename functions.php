<?php

function koneksi()
{
  $conn = mysqli_connect('localhost', 'root', '', 'pw2024_tubes_233040149');
  return $conn;
}




function registrasi($data)
{
  $conn = koneksi();

  $username = strtolower(stripslashes($data["username"]));
  $email = htmlspecialchars($data["email"]);
  $password = mysqli_real_escape_string($conn, $data["password"]);
  $password2 = mysqli_real_escape_string($conn, $data["password2"]);

  // cek username udah ada atau belum
  $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
  if (mysqli_fetch_assoc($result)) {
    echo "<script>
            alert('username sudah terdaftar!')
          </script>";
    return false;
  }

  // cek email udah ada atau belum
  $result = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'");
  if (mysqli_fetch_assoc($result)) {
    echo "<script>
            alert('email sudah terdaftar!')
          </script>";
    return false;
  }

  // cek konfirmasi password
  if ($password !== $password2) {
    echo "<script>
            alert('password tidak sesuai')
          </script>";
    return false;
  }

  // enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);

  // tambahkan user baru ke database
  mysqli_query($conn, "INSERT INTO user values(NULL, '$username', '$email', '$password', 2)");

  return mysqli_affected_rows($conn);
}
