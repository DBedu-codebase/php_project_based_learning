<?php
session_start();
require_once '../utils/UseRouter.php';

try {
     if (isset($_SESSION['usersId'])) {
          $_SESSION['Todos-' . $_SESSION['usersId']['id']] = [];
          redirectTo('/dashboard');
     }
} catch (Exception $e) {
     echo 'Caught exception: ',  $e->getMessage(), "\n";
}
