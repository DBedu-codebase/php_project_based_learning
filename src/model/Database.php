<?php
// session_start();
function getUsers()
{
     return $_SESSION['Users'] ?? [];
}
function GetTodo()
{
     return $_SESSION['Todos'] ?? [];
}
// function getUsers()
// {
//      return $_SESSION['Users'] ?? [];
// }
