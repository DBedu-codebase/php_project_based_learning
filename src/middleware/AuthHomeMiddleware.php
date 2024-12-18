<?php
// ? add session start if route is not index.php
if (strpos($_SERVER['REQUEST_URI'], 'views/index.php') === false) {
     session_start();
}
// Middleware to protect the home page (ensures the user is logged in)
function authProtectHomeMiddleware()
{
     //? Write your code here || create if statement for checking value from usersId sessions
     // ? Write your code here || use !isset for checking the value from usersId sessions
     if () {
          header('Location: index.php');  // Redirect to login page if not logged in
          exit();
     }
}

// Middleware to handle redirection for the login page
function authHomeMiddleware()
{
     //? Write your code here || create if statement for checking value from usersId sessions
     // ? Write your code here || use !isset for checking the value from usersId sessions
     if () {
          header('Location: ../views/Home.php');  // Redirect to home if already logged in
          exit();
     }
}
