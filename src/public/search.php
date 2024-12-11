<?php
session_start();
$ProductData = $_SESSION['ProductData'] ?? [];

$searchQuery = strtolower($_GET['search'] ?? '');

if ($searchQuery === '') {
     $filteredProducts = $ProductData;
} else {
     $filteredProducts = array_filter($ProductData, function ($product) use ($searchQuery) {
          return strpos(strtolower($product['name']), $searchQuery) !== false;
     });
}

// $_SESSION['ProductData'] = $filteredProducts;
// header("Location: product.php");
// exit();
$data = $_SESSION['ProductData'];
var_dump($data);
