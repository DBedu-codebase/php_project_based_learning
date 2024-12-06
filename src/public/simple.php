<?php
// ? function declaration based on calculator, write your code here
$sum = fn($a = 0, $b = 0): int => $a + $b;
$subtract = fn($a = 0, $b = 0): int => $a - $b;
$multiply = fn($a = 0, $b = 0): int => $a * $b;
$divide = fn($a = 0, $b = 0) => $a / $b;


// ? Result Output
echo $sum(2, 3) . "\n";
echo $subtract(2, 3) . "\n";
echo $multiply(2, 3) . "\n";
echo $divide(1, 3) . "\n";
