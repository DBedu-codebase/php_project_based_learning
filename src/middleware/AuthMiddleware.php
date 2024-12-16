<?php

function validateInput($username, $password)
{
     $error = [];
     if (empty($username)) {
          $error['email'] = 'Email is required';
     } elseif (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
          $error['email'] = 'Please enter your valid mail';
     } elseif (isset($_SESSION['Users']) && array_search($username, array_column($_SESSION['Users'], 'email')) !== false) {
          $error['email'] = 'Email already exists';
     }

     if (empty($password)) {
          $error['password'] = 'Password is required';
     } elseif (strlen($password) < 8) {
          $error['password'] = 'Password must be at least 8 characters';
     }


     $_SESSION['error'] = $error;
     header('Location: ../views/Sign-up.php');
     // exit();
}
