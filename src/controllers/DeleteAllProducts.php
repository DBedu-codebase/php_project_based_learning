<?php
session_start();
unset($_SESSION['ProductData']);
header("Location: ../index.php");
exit();
