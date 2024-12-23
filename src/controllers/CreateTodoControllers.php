<?php
// session_start();
require_once '../utils/FormValidation.php';
require_once '../utils/DateFormat.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     $error = validateTodos(
          $_POST['title'],
          $_POST['date'],
          $_POST['Priority'],
          $_POST['category'],
          $_POST['description']
     );

     if (empty($_SESSION['error'])) {
          unset($_SESSION['error']);
          $newTodos = [
               'id' => uniqid(),
               'title' => $_POST['title'],
               'date' => formatDate($_POST['date']),
               'priority' => $_POST['Priority'],
               'category' => $_POST['category'],
               'description' => trim(preg_replace('/\s+/', ' ', $_POST['description'])),
               'isCompleted' => false,
               'createdAt' => date('Y-m-d H:i:s'),
               'updatedAt' => date('Y-m-d H:i:s'),
          ];
          $_SESSION['Todos-' . $_SESSION['usersId']['id']][] = $newTodos;
          header('Location: /dashboard');
          exit();
     } else {
          $_SESSION['error'] = $error;
          header('Location: /dashboard');
          exit();
     }
}
