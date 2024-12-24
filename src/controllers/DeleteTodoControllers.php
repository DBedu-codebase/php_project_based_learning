<?php
require_once '../utils/UseRouter.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
     try {
          $TodoId = $_POST['id'];
          if (isset($_SESSION['usersId'])) {
               $_SESSION['Todos-' . $_SESSION['usersId']['id']] = array_filter(
                    $_SESSION['Todos-' . $_SESSION['usersId']['id']],
                    fn($todo) => $todo['id'] != $TodoId
               );
          }
          redirectTo('/dashboard');
     } catch (Exception $e) {
          echo 'Caught exception: ',  $e->getMessage(), "\n";
     }
}
