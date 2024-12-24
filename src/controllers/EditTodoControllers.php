<?php
require_once '../utils/DateFormat.php';
require_once '../utils/FormValidation.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     $id = $_GET['id'] ?? null;
     // var_dump($_POST);
     if ($id !== null) {
          $error = validateTodos();

          if (empty($error)) {
               // Fetch the todos array from the session
               $todos = $_SESSION['Todos-' . $_SESSION['usersId']['id']] ?? [];

               // ? Iterate and update the specific todo by ID
               foreach ($todos as &$todo) {
               }

               // Save the updated todos array back to the session
               $_SESSION['Todos-' . $_SESSION['usersId']['id']] = $todos;

               // Redirect to dashboard after successful update
               unset($_SESSION['error']);
               redirectTo('/dashboard');
          } else {
               // Save error messages and redirect back to the update form
               $_SESSION['error'] = $error;
               redirectTo('/UpdateTodos?id=' . $id);
          }
     }
}
