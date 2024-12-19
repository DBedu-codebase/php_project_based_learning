<?php
session_start();
function getUsers()
{
     return $_SESSION['Users'] ?? [];
}
