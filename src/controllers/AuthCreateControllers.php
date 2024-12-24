<?php
session_start();
require_once '../utils/FormValidation.php';
require_once '../utils/UseRouter.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     // ? Todo: Tambahkan value dari input pengguna, pada function `validateInput()`
     // ? Todo: Buatlah struktur array asosiatif pada variabel `$newUsers`
     // $error = validateInput();

     if (empty($error)) {
          $newUsers = [];
          $_SESSION['Users'][] = $newUsers;
          redirectTo('/login');
     } else {
          $_SESSION['error'] = $error;
          redirectTo('/register');
     }
}
