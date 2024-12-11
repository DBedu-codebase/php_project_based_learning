<?php
session_start();
unset($_SESSION['ProductData']);
header("Location: product.php");
exit();
