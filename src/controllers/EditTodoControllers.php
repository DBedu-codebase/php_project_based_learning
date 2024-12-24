<?php
require_once '../utils/DateFormat.php';
require_once '../utils/FormValidation.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     $id = $_GET['id'] ?? null;

     if ($id !== null) {
          $error = validateTodos(
               $_POST['title'],
               $_POST['date'],
               $_POST['Priority'],
               $_POST['category'],
               $_POST['description']
          );

          if (empty($error)) {
               // Fetch the todos array from the session
               $todos = $_SESSION['Todos-' . $_SESSION['usersId']['id']] ?? [];

               // Iterate and update the specific todo by ID
               foreach ($todos as &$todo) {
                    if ($todo['id'] == $id) {
                         $todo['title'] = $_POST['title'] ?? $todo['title'];
                         $todo['date'] = isset($_POST['date']) ? formatDate($_POST['date']) : $todo['date'];
                         $todo['priority'] = $_POST['Priority'] ?? $todo['priority'];
                         $todo['category'] = $_POST['category'] ?? $todo['category'];
                         $todo['description'] = $_POST['description'] ?? $todo['description'];
                         $todo['isCompleted'] = $_POST['status'] ?? $todo['isCompleted'];
                         $todo['updatedAt'] = date('Y-m-d H:i:s');
                         break; // Break the loop after finding and updating the todo
                    }
               }

               // Save the updated todos array back to the session
               $_SESSION['Todos-' . $_SESSION['usersId']['id']] = $todos;

               // Redirect to dashboard after successful update
               unset($_SESSION['error']);
               header('Location: /dashboard');
               exit();
          } else {
               // Save error messages and redirect back to the update form
               $_SESSION['error'] = $error;
               header('Location: /UpdateTodos');
               exit();
          }
     }
}
