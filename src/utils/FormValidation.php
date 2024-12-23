<?php
require_once '../model/Database.php';
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
     header('Location: /register');
}
function validateTodos($title, $date, $Priority, $category, $description)
{
     $error = [];
     if (empty($title)) {
          $error['title'] = 'Title is required';
     }
     if (empty($Priority)) {
          $error['priority'] = 'priority is required';
     }
     if (empty($category)) {
          $error['category'] = 'category is required';
     }

     if (empty($date)) {
          $error['date'] = 'DueDate is required';
     }
     //  elseif (date_create_from_format('d/m/Y', $date) < date_create_from_format('d/m/Y', date('d/m/Y'))) {
     //      $error['date'] = 'Date must be in the future';
     // }
     if (empty($description)) {
          $error['description'] = 'description is required';
     } elseif (strlen($description) < 10) {
          $error['description'] = 'description must be have at least 10 characters';
     }


     $_SESSION['error'] = $error;
}
function validateUser($username, $password)
{
     foreach (getUsers() as $user) {
          if ($user['email'] == $username && password_verify($password, $user['password'])) {
               $_SESSION['usersId'] = $user;
               return true;
          }
     }
     return false;
}
