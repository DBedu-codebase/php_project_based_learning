<?php
session_start();
require_once '../utils/FormValidation.php';
require_once '../utils/UseRouter.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     $error = validateInput($_POST['email'], $_POST['password']);

     if (empty($error)) {
          $newUsers = [
               'id' => uniqid(),
               'email' => $_POST['email'],
               'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
          ];
          $_SESSION['Users'][] = $newUsers;
          redirectTo('/login');
     } else {
          $_SESSION['error'] = $error;
          redirectTo('/register');
     }
}
