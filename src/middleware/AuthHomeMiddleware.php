<?php

// Middleware to protect the home page (ensures the user is logged in)
function authProtectHomeMiddleware()
{
     if (!isset($_SESSION['usersId'])) {
          header('Location: /login'); // Redirect to login if not logged in
          exit();
     }
}

// Middleware: Prevent logged-in users from accessing login/register pages
function authHomeMiddleware()
{
     if (isset($_SESSION['usersId'])) {
          header('Location: /dashboard'); // Redirect logged-in users to dashboard
          exit();
     }
}
