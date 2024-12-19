<?php
session_start();

// Delete session usersId
if (isset($_SESSION['usersId'])) {
     unset($_SESSION['usersId']);
}

// Redirect ke halaman login
header("Location: ../views/index.php");
exit();
