<?php
session_start();
require_once '../utils/FormValidation.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     $error = validateTodos(
          $_POST['title'],
          $_POST['date'],
          $_POST['Priority'],
          $_POST['category'],
          $_POST['description']
     );
     if (empty($error)) {
          $newTodos = [
               'id' => uniqid(),
               'title' => $_POST['title'],
               'date' => $_POST['date'],
               'priority' => $_POST['Priority'],
               'category' => $_POST['category'],
               'description' => $_POST['description'],
               'isCompleted' => false,
               'createdAt' => date('Y-m-d H:i:s'),
               'updatedAt' => date('Y-m-d H:i:s'),
          ];
          $_SESSION['Todos-' . $_SESSION['usersId']['id']][] = $newTodos;

          header('Location: /dashboard');
          exit();
     }
}
