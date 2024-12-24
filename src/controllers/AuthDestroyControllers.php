<?php
require_once '../utils/UseRouter.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['usersId'])) {
     unset($_SESSION['usersId']);
     redirectTo('/login');
}
