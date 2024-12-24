<?php
require_once '../utils/UseRouter.php';
function validateLogin($username, $password)
{
     $validateUser = validateUser($username, $password);

     if ($validateUser) {
          return true;
     } else {
          return [
               'email' => 'Please enter your valid mail',
               'password' => 'Please enter your valid password'
          ];
     }
}

function handlePostRequest()
{
     $username = $_POST['email'] ?? '';
     $password = $_POST['password'] ?? '';

     try {
          $error = validateLogin($username, $password);

          if ($error === true) {
               unset($_SESSION['error']);
               redirectTo('/dashboard');
          } else {
               $_SESSION['error'] = $error;
               redirectTo('/login');
          }
     } catch (Exception $e) {
          $_SESSION['error'] = ['general' => 'An unexpected error occurred.'];
          redirectTo('/login');
     }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     handlePostRequest();
}
