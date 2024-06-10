<?php
require '../functions.php';

// Tombol cari ditekan
if (isset($_POST["cari"])) {
  $keyword = $_POST["keyword"];
  $users = cari($keyword);
} else {
  // Jika tidak ada pencarian, tampilkan semua user
  $users = query("SELECT * FROM `user`");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    /* Global styles */
    body {
      margin: 0;
      padding: 0;
      font-family: url(../assets/font/eFootballStencil-Regular.woff);
      background-color: #f2f2f2;
    }

    /* Sidebar styles */
    .sidebar {
      position: fixed;
      width: 250px;
      height: 100%;
      background-color: #333;
      padding-top: 20px;
      color: #fff;
    }

    .sidebar ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
    }

    .sidebar ul li {
      padding: 10px;
      border-bottom: 1px solid #555;
    }

    .sidebar ul li a {
      color: #fff;
      text-decoration: none;
    }

    .sidebar ul li:hover {
      background-color: #555;
    }

    .profile-icon {
      font-size: 30px;
      margin-bottom: 20px;
    }

    /* Content styles */
    .content {
      margin-left: 250px;
      padding: 20px;
    }

    .content h1 {
      color: #333;
    }

    .card {
      background-color: #fff;
      padding: 35vh;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>

<body>

  <div class="sidebar">
    <div class="profile-icon">
      <i class="fas fa-user-circle"> Admin</i>
    </div>
    <ul>
      <li><a href="dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
      <li><a href="user.php"><i class="fas fa-users"></i> Users</a></li>
      <li><a href="topuphistory.php"><i class="fas fa-history"></i> Top Up History</a></li>
      <li><a href="#"><i class="bi bi-box-arrow-left"></i> Log Out</a></li>
    </ul>
  </div>

  <div class="content">
    <h1>Data Users</h1>

    <a href="tambah.php" class="btn btn-primary mb-3">Tambah User</a>

    <br>

    <form action="" method="post" class="d-flex w-50" role="search">
      <input type="text" name="keyword" class="form-control me-2" autofocus>
      <button type="submit" name="cari" class="btn btn-primary">Cari!</button>
    </form>

    <br>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Username</th>
          <th scope="col">Email</th>
          <th scope="col">Password</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($users)) : ?>
          <?php $i = 1; ?>
          <?php foreach ($users as $user) : ?>
            <tr>
              <th scope="row"><?= $user['id']; ?></th>
              <td><?= $user['username']; ?></td>
              <td><?= $user['email']; ?></td>
              <td><?= $user['password']; ?></td>
              <td>
                <a href="ubahuser.php?id=<?= $user['id']; ?>" class="badge text-bg-warning text-decoration-none">Ubah</a>
                <a href="hapus.php?id=<?= $user['id']; ?>" class="badge text-bg-danger text-decoration-none">Hapus</a>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php else : ?>
          <tr>
            <td colspan="5" class="text-center">Tidak ada data</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>