<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
     $TodoId = $_POST['id'];
     $_SESSION['Todos-' . $_SESSION['usersId']['id']] = array_filter(
          $_SESSION['Todos-' . $_SESSION['usersId']['id']],
          fn($todo) => $todo['id'] != $TodoId
     );
     header("Location: /dashboard");
     exit();
}
