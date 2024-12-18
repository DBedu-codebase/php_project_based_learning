<?php
require_once '../utils/FormValidation.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     // ? Write your code here || passing the users input to the validateInput function
     $error = validateInput();
     //  ? write your code here || Checking if the error array is empty
     if (empty($error)) {
          // ? Write your code here || create array associative 
          // ? Write your code here || assign the users input to the associative array
          $_SESSION['Users'][] = $newUsers;
          header("Location: ../views/index.php");
          exit();
     } else {
          $_SESSION['error'] = $error;
          header('Location: ../views/Sign-up.php');
          exit();
     }
}
