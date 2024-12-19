<?php

// Middleware to protect the home page (ensures the user is logged in)
function authProtectHomeMiddleware()
{
     if (!isset($_SESSION['usersId'])) {
          header('Location: index.php');  // Redirect to login page if not logged in
          exit();
     }
}

// Middleware to handle redirection for the login page
function authHomeMiddleware()
{
     if (isset($_SESSION['usersId'])) {
          header('Location: ../views/Home.php');  // Redirect to home if already logged in
          exit();
     }
}
