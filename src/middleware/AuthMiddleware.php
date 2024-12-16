<?php

function validateInput($username, $password)
{
     if (empty($username) || empty($password)) {
          # code...
          header('Location: ../views/index.php');
          exit();
     }
}
