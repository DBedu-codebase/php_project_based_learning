<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     // Get the ID from the POST data
     $id = $_POST['id'] ?? null;

     // Check if ID exists and it's valid
     if ($id !== null) {
          // ? Write your code here || Loop through the session data to find the matching product by ID
          // ? Write your code here || Update the product data based on input post user data

          // Save the updated session data (this happens automatically when modifying session variables)
          $_SESSION['ProductData'] = $_SESSION['ProductData'];

          // Redirect to the product page after updating
          header("Location: ../index.php");
          exit();
     } else {
          // If no valid ID was provided, you can redirect or handle the error as needed
          echo "Invalid product ID.";
          exit();
     }
} else {
     // If the request method is not POST, you can redirect or handle the error as needed
     echo "Invalid request.";
     exit();
}
