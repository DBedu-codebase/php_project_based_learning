<?php
require_once '../model/UsersData.php';
function validateInput($username, $password)
{
     $error = [];
     //? Write your code here || create if statement validation username

     //? Write your code here || create if statement validation password

     $_SESSION['error'] = $error;
     header('Location: ../views/Sign-up.php');
}
function validateUser($username, $password)
{
     // ? Write your code here || Create a foreach loop and validation the user and password
     // ? Write your code here || for password validation use password_verify
     // ? Write your code here || create news session usersId and return true
     return false;
}
