<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     $newProduct = [
          'id' => uniqid(),
          'email' => $_POST['email'],
          'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
     ];
     $_SESSION['Users'][] = $newProduct;
     var_dump($_SESSION['Users']);
     // header("Location: ../views/index.php");
     exit();
}