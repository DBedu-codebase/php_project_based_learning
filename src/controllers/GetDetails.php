  <?php
     session_start();

     $ProductData = $_SESSION['ProductData'] ?? [];
     $count = count($ProductData ?? []);
     // / Use array_filter to find the item with the matching ID
     $itemId = $_GET['id'];
     $filtered = array_filter($ProductData, function ($item) use ($itemId) {
          return $item['id'] == $itemId;
     });
     $filtered = array_values($filtered)[0];
     ?>
