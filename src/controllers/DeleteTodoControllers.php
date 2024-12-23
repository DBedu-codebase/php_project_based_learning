<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     if (isset($_POST['id'])) {
          $TodoId = $_POST['id'];
          // Check if 'delete' or 'edit' action was posted
          $data =   $_SESSION['Todos-' . $_SESSION['usersId']['id']] = array_values(
               array_filter($_SESSION['Todos-' . $_SESSION['usersId']['id']], fn($todo) => $todo['id'] != $TodoId)
          );
          // Redirect to dashboard after operation
          header("Location: /dashboard");
          exit();
     }
}
