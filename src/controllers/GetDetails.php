  <?php
     session_start();

     $ProductData = $_SESSION['ProductData'] ?? [];
     // / Use array_filter to find the item with the matching ID
     $itemId = $_GET['id'];
     // ? Write your code here || Use array_filter to find the prdoucts with the matching ID
