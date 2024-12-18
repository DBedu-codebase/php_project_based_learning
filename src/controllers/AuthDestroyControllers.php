<?php
session_start();

// ? Write your code here || unset the usersId session if it exists


// Redirect ke halaman login
header("Location: ../views/index.php");
exit();
