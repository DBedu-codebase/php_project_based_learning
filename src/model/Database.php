<?php
function getUsers()
{
     return $_SESSION['Users'] ?? [];
}
