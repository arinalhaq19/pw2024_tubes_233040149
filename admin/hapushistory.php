<?php
require '../functions.php';

$id = $_GET['id'];

if (isset($id)) {
  // jika data berhasil di tambahkan 
  if (hapushistory($id) > 0) {
    echo "<script>
            alert('data berhasil di hapus');
            document.location.href = 'topuphistory.php';
          </script>";
  }
}
