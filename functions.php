<?php

function koneksi()
{
  $conn = mysqli_connect('localhost', 'root', '', 'pw2024_tubes_233040149');
  return $conn;
}


function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
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

function topup($data)
{
  $conn = koneksi();

  $jumlah = $data["jumlah"];
  $nickname = strtolower(stripslashes($data["nickname"]));
  $metode = $data["metode"];
  $email = htmlspecialchars($data["email"]);

  $query = "INSERT INTO orders VALUES (null,'$jumlah', '$nickname', '$metode', '$email')";
  if (mysqli_query($conn, $query)) {
    return 1;
  } else {
    return 0;
  }
}



function tambah($data)
{
  $conn = koneksi();


  $username = strtolower(stripslashes($data["username"]));
  $email = htmlspecialchars($data["email"]);
  $password = mysqli_real_escape_string($conn, $data["password"]);

  $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
  if (mysqli_fetch_assoc($result)) {
    echo "<script>
            alert('username sudah terdaftar!')
          </script>";
    return false;
  }

  $result = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'");
  if (mysqli_fetch_assoc($result)) {
    echo "<script>
            alert('email sudah terdaftar!')
          </script>";
    return false;
  }


  $password = password_hash($password, PASSWORD_DEFAULT);

  mysqli_query($conn, "INSERT INTO user values(NULL, '$username', '$email', '$password', 2)");

  return mysqli_affected_rows($conn);
}


function ubahuser($data)
{
  $conn = koneksi();

  $id = htmlspecialchars($data['id']);
  $username = htmlspecialchars($data['username']);
  $email = htmlspecialchars($data['email']);
  $password = htmlspecialchars($data['password']);

  $password = password_hash($password, PASSWORD_DEFAULT);


  $query = "UPDATE user SET 
                username = '$username',
                email = '$email',
                password = '$password'
                WHERE id = $id";


  mysqli_query($conn, $query) or die(mysqli_error($conn));


  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();

  mysqli_query($conn, "DELETE FROM user WHERE id  = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function hapushistory($id)
{
  $conn = koneksi();

  mysqli_query($conn, "DELETE FROM orders WHERE id_order  = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $conn = koneksi();
  $keyword = htmlspecialchars($keyword); // Escape input
  $query = "SELECT * FROM user WHERE username LIKE '%$keyword%' OR email LIKE '%$keyword%'";
  $result = mysqli_query($conn, $query);

  if (!$result) {
    die('Query Error: ' . mysqli_error($conn));
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function search($kunci)
{
  $conn = koneksi();
  $kunci = htmlspecialchars($kunci); // Escape input
  $query = "SELECT * FROM orders NATURAL JOIN efootball WHERE nickname LIKE '%$kunci%' OR email LIKE '%$kunci%' OR coin LIKE '%$kunci%' OR harga LIKE '%$kunci%' OR method LIKE '%$kunci%'";
  $result = mysqli_query($conn, $query);

  if (!$result) {
    die('Query Error: ' . mysqli_error($conn));
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function login($username, $password)
{
  $conn = koneksi();

  // Sanitasi input untuk mencegah SQL Injection
  $username = mysqli_real_escape_string($conn, $username);

  // Query untuk memeriksa pengguna
  $query = "SELECT * FROM user WHERE username = '$username'";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) === 1) {
    $user = mysqli_fetch_assoc($result);

    // Verifikasi password
    if (password_verify($password, $user['password'])) {
      if ($user['id_role'] == 1) {
        header("Location: admin/dashboard.php");
        exit;
      } else if ($user['id_role'] == 2) {
        header("Location: index.php");
        exit;
      }
    } else {
      echo  "<script>
                alert('Password salah');
             </script>";
    }
  } else {
    echo "<script>
                alert('Username salah atau tidak ditemukan');
          </script>";
  }
}
