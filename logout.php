<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();

header("location: login.php");
exit;
?>

<?php
// session_start();

// // Hapus semua variabel session
// session_unset();

// // Hapus session
// session_destroy();

// // Redirect ke halaman login
// header("Location: login.php");
// exit();
?>