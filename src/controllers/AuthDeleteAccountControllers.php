<?php
require_once '../model/Database.php';

$users = getUsers();
$usersId = $_SESSION['usersId']['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($usersId)) {
     $users = array_filter($users, fn($user) => $user['id'] !== $usersId);
     $_SESSION['Users'] = $users;
     unset($_SESSION['usersId']);
     unset($_SESSION['Todos-' . $usersId]);
     header("Location: /register");
     exit();
}
