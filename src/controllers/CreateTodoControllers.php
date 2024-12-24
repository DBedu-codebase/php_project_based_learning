<?php
// session_start();
require_once '../utils/FormValidation.php';
require_once '../utils/DateFormat.php';

function createTodo($data)
{
     // ? Todo: Tambahkan value dari input pengguna, pada function `validateTodos()`
     // ? Todo: Buatlah struktur array asosiatif pada variabel `$newTodos`
     $error = validateTodos();

     if (!empty($error)) {
          $_SESSION['error'] = $error;
          redirectTo('/dashboard');
          return;
     }

     $newTodos = [];

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
