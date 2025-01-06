<?php

$currentYear = getdate()['year'];
$name = 'John Doe';
$age = 20;
$birthYear = $currentYear - $age;
$status = 'College Student';
$hobi = 'Coding';
$isYounger = $age <= 19;

$weight = 50;
$height = 170 / 100;
$bmi = $weight / ($height * $height);
$ideal = $bmi >= 18.5 && $bmi <= 24.9;
// * Result Output & echo your variable here
echo "Name: $name" . PHP_EOL;
echo "Age: $age" . PHP_EOL;
echo "Birth Year: $birthYear" . PHP_EOL;
echo "Status: $status" . PHP_EOL;
echo "Hobi: $hobi" . PHP_EOL;
echo "Is Younger?: " . ($isYounger ? 'Yes' : 'No') . PHP_EOL;
echo "Weight: $weight" . PHP_EOL;
echo "Height: $height" . PHP_EOL;
echo "BMI: $bmi" . PHP_EOL;
echo "Ideal Weight: " . PHP_EOL;
var_dump($ideal);
