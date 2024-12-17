<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
     $id = $_GET['id'];
     if (isset($_SESSION['ProductData'])) {
          // ? Write your code here || Delete sesion products based on id, with foreach or use array_filter & array_values ;
     }
     header("Location: ../index.php");
     exit();
}
