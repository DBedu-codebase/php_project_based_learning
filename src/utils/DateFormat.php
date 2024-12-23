<?php
// ? Format Date Time 
function formatDate(string $dateString): ?string
{
     $error = [];
     $date = DateTime::createFromFormat('Y-m-d', $dateString);
     if ($date < new DateTime()) {
          $error['date'] = 'Date must be in the future';
          return $_SESSION['error'] = $error;
          header('Location: /dashboard');
          exit();
     }
     return $date->format('d/m/Y');
}
