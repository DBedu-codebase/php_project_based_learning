<?php
require_once '../model/UsersData.php';
require_once '../utils/FormValidation.php';

$error = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $username = $_POST['email'] ?? '';
     $password = $_POST['password'] ?? '';

     $validateUser = validateUser($username, $password);

     if ($validateUser) {
          unset($_SESSION['error']);
          header('Location: ../views/Home.php');
          exit();
     } else {
          $_SESSION['error'] = [
               'email' => 'Please enter your valid mail',
               'password' => 'Please enter your valid password'
          ];
          header('Location: ../views/index.php');
          exit();
     }
}
