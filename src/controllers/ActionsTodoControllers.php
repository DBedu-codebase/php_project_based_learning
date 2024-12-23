<?php
session_start();
function deleteTodo($id)
{
     foreach ($_SESSION['Todos-' . $_SESSION['usersId']['id']] as $key => $value) {
          if ($value['id'] == $id) {
               unset($_SESSION['Todos-' . $_SESSION['usersId']['id']][$key]);
               header('Location: /dashboard');
               exit();
          }
     }
}
function editTodo($id) {}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     if (isset($_GET['id'])) {
          $TodoId = $_GET['id'];
          return isset($_POST['delete']) ? deleteTodo($TodoId) : editTodo($TodoId);
     }
}
