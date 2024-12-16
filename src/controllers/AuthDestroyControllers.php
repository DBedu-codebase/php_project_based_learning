<?php
session_start();

// Hapus session tertentu (misalnya, userId)
if (isset($_SESSION['usersId'])) {
     unset($_SESSION['usersId']);
}

// Atau, untuk menghapus semua session
// session_destroy();

// Redirect ke halaman login
header("Location: ../views/index.php");
exit();
