<?php
require_once '../model/UsersData.php';
require_once '../middleware/AuthMiddleware.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $username = $_POST['email'] ?? '';
     $password = $_POST['password'] ?? '';

     // Debug inputs
     // var_dump($username, $password);
     // die();

     validateInput($username, $password);
     $validateUser = validateUser($username, $password);

     if ($validateUser) {
          header('Location: ../views/Home.php');
          exit();
     } else {
          header('Location: ../views/Sign-up.php');
          exit();
     }
}
