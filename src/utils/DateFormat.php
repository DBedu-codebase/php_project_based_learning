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

function formatDateTime(string $dateString)
{
     try {
          // Validate the date format using regex for DD/MM/YYYY
          if (preg_match('/^\d{2}\/\d{2}\/\d{4}$/', $dateString)) {
               // Use DateTime::createFromFormat to parse the European date format
               $date = DateTime::createFromFormat('d/m/Y', $dateString);
               if ($date) {
                    // Format the date as YYYY-MM-DD for the HTML input
                    return $date->format('Y-m-d');
               }
               throw new \Exception('Invalid date format');
          }
          throw new \Exception('Invalid date format');
     } catch (\Throwable $th) {
          return $th->getMessage(); // Return the error message if conversion fails
     }
}
