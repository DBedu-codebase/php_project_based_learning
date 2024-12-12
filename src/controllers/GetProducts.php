<?php
session_start();
$ProductData = $_SESSION['ProductData'] ?? [];
$count = count($ProductData ?? []);
var_dump($ProductData);
