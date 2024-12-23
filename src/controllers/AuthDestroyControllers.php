<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     // Delete session usersId
     if (isset($_SESSION['usersId'])) {
          unset($_SESSION['usersId']);
     }

     // Redirect ke halaman login
     header("Location: /register");
     exit();
}
