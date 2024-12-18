<?php
require_once '../model/UsersData.php';
require_once '../utils/FormValidation.php';

$error = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $username = $_POST['email'] ?? '';
     $password = $_POST['password'] ?? '';
     // ? Write your code here || passing the username and password to the validateUser function
     $validateUser = validateUser();

     if ($validateUser) {
          // ? Write your code here || delete the error session
          header('Location: ../views/Home.php');
          exit();
     } else {
          // ? Write your code here || assign the error message to the error session
          // ? Write your code here || error message should be 'Please enter your valid mail' and 'Please enter your valid password'
          $_SESSION['error'] = [];
          header('Location: ../views/index.php');
          exit();
     }
}
