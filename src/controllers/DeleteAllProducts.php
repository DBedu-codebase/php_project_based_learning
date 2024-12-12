<?php
session_start();
unset($_SESSION['ProductData']);
header("Location: ../views/index.php");
exit();
