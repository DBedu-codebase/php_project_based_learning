<?php
session_start();
$users = [];

$users = $_SESSION['Users'];

function getUsers()
{
     global $users;
     return $users;
}
function validateUser($username, $password)
{
     $users = getUsers();

     foreach ($users as $user) {
          if ($user['email'] == $username && password_verify($password, $user['password'])) {
               $_SESSION['usersId'] = [
                    'email' => $user['email'],
                    'password' => $user['password']
               ];
               return true;
          }
     }
     return false;
}