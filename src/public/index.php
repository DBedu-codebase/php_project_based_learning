<?php
session_start(); // Start session to use session variables
require_once '../middleware/AuthHomeMiddleware.php';
// Parse the request URI
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$route = trim($urlPath, '/'); // Remove leading slash

// Base directory of the application
$baseDir = dirname(__DIR__); // Points to `src/`
// Apply middleware depending on the route
if ($route === 'login' || $route === 'register') {
     authHomeMiddleware(); // If trying to access login/register while logged in, redirect to dashboard
}

// Apply protection to pages that need authentication (like /dashboard)
if ($route === 'dashboard') {
     authProtectHomeMiddleware(); // Protect dashboard page
}

// Handle POST requests by redirecting to the appropriate controller
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     $controllerPath = "{$baseDir}/controllers/{$route}.php";

     if (file_exists($controllerPath)) {
          include $controllerPath;
          exit(); // Stop further execution after including the controller
     } else {
          http_response_code(404); // Page not found
          include "{$baseDir}/views/404.php";
          exit();
     }
}

// For GET requests, serve the views
$viewPath = "{$baseDir}/views/{$route}.php";

if (file_exists($viewPath)) {
     include $viewPath; // Include the view file
} else {
     include "{$baseDir}/views/404.php"; // 404 if the view file doesn't exist
}
