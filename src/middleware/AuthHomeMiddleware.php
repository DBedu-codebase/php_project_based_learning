<?php
require_once '../utils/UseRouter.php';
// Middleware to protect the home page (ensures the user is logged in)
function authProtectHomeMiddleware()
{
     if (!isset($_SESSION['usersId'])) {
          redirectTo('/login');
     }
}

// Middleware: Prevent logged-in users from accessing login/register pages
function authHomeMiddleware()
{
     if (isset($_SESSION['usersId'])) {
          redirectTo('/dashboard');
     }
}
