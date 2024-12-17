<?php
// ? function declaration based on calculator, write your code here
// * CLI Instructions, adjust based on your preference(optionaal)
echo "=== Program Kakulator Sederhana ===\n";
echo "Ketik 'add' untuk menambahkan input number.\n";
echo "Ketik 'x' untuk keluar.\n";
echo "Ketik 'sum' untuk menjumlahkan item.\n";
echo "Ketik 'subtract' untuk mengurangi item.\n";
echo "Ketik 'divide' untuk membagi item.\n";
echo "Ketik 'multiply' untuk mengalikan item.\n";
// ? array data based on calculator
$data = [];
// ? while loop
while (true) {
     // ? user input
     echo "\nMasukkan perintah Anda: ";
     $input = trim(fgets(STDIN));
     // * Condtionals based on user input 
     if ($input === 'x') {
          echo "Keluar dari program.\n";
          break;
     } elseif ($input === 'sum') {
          // ? write your code here

          break;
     } elseif ($input === 'divide') {
          // ? write your code here

          break;
     } elseif ($input === 'multiply') {
          // ? write your code here
          break;
     } elseif ($input === 'subtract') {
          // ? write your code here

          break;
     } elseif ($input === 'add') {
          while (true) {
               echo "Masukkan item untuk ditambahkan (ketik 'exit' untuk kembali ke menu utama): ";
               $item = trim(fgets(STDIN));
               if ($item === 'exit') {
                    echo "=== Program Kakulator Sederhana ===\n";
                    echo "Ketik 'add' untuk menambahkan input number.\n";
                    echo "Ketik 'x' untuk keluar.\n";
                    echo "Ketik 'sum' untuk menjumlahkan item.\n";
                    echo "Ketik 'subtract' untuk mengurangi item.\n";
                    echo "Ketik 'divide' untuk membagi item.\n";
                    echo "Ketik 'multiply' untuk mengalikan item.\n";
                    break;
               }
               // ? validation length in data array
               if (sizeof($data) > 1) {
                    echo "Daftar item sudah penuh.\n";
                    break;
               }
               // ? add number into array data, and show the data
               $data[] = $item;
               echo "Daftar item saat ini:\n";
               foreach ($data as $key => $value) {
                    echo ($key + 1) . " - $value\n";
               }
          }
     } else {
          echo "Perintah tidak dikenali. Coba lagi.\n";
     }
}
