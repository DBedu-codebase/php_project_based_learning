<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     // ? Write your code here || create array associative based on request & value from users
     $newProduct = [];

     $_SESSION['ProductData'][] = $newProduct;
     header("Location: ../index.php");
     exit();
}
