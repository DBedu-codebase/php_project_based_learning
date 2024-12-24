<?php

session_start();

if (isset($_SESSION['usersId'])) {
     $_SESSION['Todos-' . $_SESSION['usersId']['id']] = [];
     header('Location: /dashboard');
     exit();
}
