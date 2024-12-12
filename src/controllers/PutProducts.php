<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     // Get the ID from the POST data
     $id = $_POST['id'] ?? null;

     // Check if ID exists and it's valid
     if ($id !== null) {
          // Loop through the session data to find the matching product by ID
          foreach ($_SESSION['ProductData'] as &$product) {
               if ($product['id'] == $id) {
                    // Update the product data
                    $product['name'] = $_POST['name'] ?? $product['name'];
                    $product['brand'] = $_POST['brand'] ?? $product['brand'];
                    $product['price'] = $_POST['price'] ?? $product['price'];
                    $product['description'] = $_POST['description'] ?? $product['description'];

                    // After updating, break the loop
                    break;
               }
          }

          // Save the updated session data (this happens automatically when modifying session variables)
          $_SESSION['ProductData'] = $_SESSION['ProductData'];

          // Redirect to the product page after updating
          header("Location: ../views/index.php");
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
