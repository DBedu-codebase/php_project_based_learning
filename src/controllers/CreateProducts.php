<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     $newProduct = [
          'id' => uniqid(),
          'name' => $_POST['name'],
          'brand' => $_POST['brand'],
          'description' => $_POST['description'] ?? 'No description provided',
          'price' => $_POST['price'],
     ];
     $_SESSION['ProductData'][] = $newProduct;
     header("Location: ../index.php");
     exit();
}
