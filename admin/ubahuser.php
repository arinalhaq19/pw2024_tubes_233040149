<?php
require '../functions.php';

// Mendapatkan 'id' dari permintaan GET dan memastikan validitasnya
$id = isset($_GET['id']) ? intval($_GET['id']) : null;
$user = null;

// Mengambil data pengguna jika ID valid
if ($id) {
  $conn = koneksi();
  $query = "SELECT * FROM user WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if ($result && mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
  }
  mysqli_close($conn);
}

// Menangani pengiriman form
if (isset($_POST['ubah'])) {
  if (ubahuser($_POST) > 0) {
    echo "<script>
                alert('Data berhasil diubah');
                document.location.href = 'user.php';
              </script>";
  } else {
    echo "<script>
                alert('Data gagal diubah');
              </script>";
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ubah Data User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container col-8">
    <h1>Form Ubah Data User</h1>
    <?php if ($user) : ?>
      <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= htmlspecialchars($user['id']) ?>">
        <div class="mb-3">
          <label for="username" class="form-label">Username :</label>
          <input type="text" class="form-control" id="username" name="username" value="<?= htmlspecialchars($user['username']); ?>">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email :</label>
          <input type="text" class="form-control" id="email" name="email" value="<?= htmlspecialchars($user['email']); ?>">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password :</label>
          <input type="text" class="form-control" id="password" name="password" value="<?= htmlspecialchars($user['password']); ?>">
        </div>
        <button type="submit" name="ubah" class="btn btn-primary">Ubah Data</button>
      </form>
    <?php else : ?>
      <div class="alert alert-danger">User tidak ditemukan atau ID tidak disediakan.</div>
    <?php endif; ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>