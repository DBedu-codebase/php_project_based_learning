<?php
session_start();
$ProductData = $_SESSION['ProductData'] ?? [];
$count = count($ProductData ?? []);
