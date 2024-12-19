<?php
// index.php in src/public

// Get the URL path (e.g., /about or /contact)
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$route = trim($urlPath, '/'); // Remove leading slash

// Dynamic routing
$viewPath = "../views/{$route}.php";

// Check if the view file exists, otherwise show 404
if (file_exists($viewPath)) {
     include $viewPath;
} else {
     include '../views/404.php';
}

// Redirect to controller file if form is submitted
// if (isset($_POST['submit'])) {
//      $controllerPath = "../controllers/{$route}Controllers.php";
//      if (file_exists($controllerPath)) {
//           header("Location: {$controllerPath}");
//           exit();
//      }
// }
