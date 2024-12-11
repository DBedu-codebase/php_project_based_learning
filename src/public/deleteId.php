<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
     $id = $_GET['id'];
     if (isset($_SESSION['ProductData'])) {
          $_SESSION['ProductData'] = array_filter($_SESSION['ProductData'], function ($product) use ($id) {
               return $product['id'] !== $id;
          });
          $_SESSION['ProductData'] = array_values($_SESSION['ProductData']);
     }
     header("Location: product.php");
     exit();
}
