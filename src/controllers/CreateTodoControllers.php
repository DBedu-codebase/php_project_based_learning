<?php
// session_start();
require_once '../utils/FormValidation.php';
require_once '../utils/DateFormat.php';

function createTodo($data)
{
     $error = validateTodos(
          $data['title'],
          $data['date'],
          $data['Priority'],
          $data['category'],
          $data['description']
     );

     if (!empty($error)) {
          $_SESSION['error'] = $error;
          redirectTo('/dashboard');
          return;
     }

     $newTodos = [
          'id' => uniqid(),
          'title' => $data['title'],
          'date' => formatDate($data['date']),
          'priority' => $data['Priority'],
          'category' => $data['category'],
          'description' => trim(preg_replace('/\s+/', ' ', $data['description'])),
          'isCompleted' => false,
          'createdAt' => date('Y-m-d H:i:s'),
          'updatedAt' => date('Y-m-d H:i:s'),
     ];

     $_SESSION['Todos-' . $_SESSION['usersId']['id']][] = $newTodos;
     redirectTo('/dashboard');
}



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     try {
          createTodo($_POST);
     } catch (Exception $e) {
          $_SESSION['error'] = ['general' => 'An error occurred while creating the todo.'];
          redirectTo('/dashboard');
     }
}
