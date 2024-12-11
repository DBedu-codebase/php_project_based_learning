<?php
session_start();
// require_once '../model/ProductData.php';
// require_once '../model/ProductData.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     $newProduct = [
          'id' => uniqid(),
          'name' => $_POST['name'],
          'brand' => $_POST['brand'],
          'description' => $_POST['description'] ?? 'No description provided',
          'price' => $_POST['price'],
          // 'item-weight' => $_POST['item-weight']
     ];
     $_SESSION['ProductData'][] = $newProduct;
     // var_dump($_SESSION['ProductData']);
     header("Location: product.php");
     exit();
}
