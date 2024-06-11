<?php
require '../../functions.php';
$keyword = $_GET["keyword"];

$query = "SELECT * FROM user WHERE username LIKE '%$keyword%' OR email LIKE '%$keyword%'";
$users = query($query);
?>
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
          <th scope="row"><?= $i++; ?></th>
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