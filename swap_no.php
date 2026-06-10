<?php 
error_reporting(E_ALL);
ini_set('display_errors','ON');

//Swap two numbers without using a third variable

$num1=10;
$num2=20;

echo 'Before Swapping <br> $num1 =' .$num1  . '<br>' . '  $num2 = ' . $num2 . '<br><br>';

$num1=$num1 + $num2;

// echo 'Num1 ='. $num1 . '<br>';

$num2=$num1 - $num2;

echo  '   after swap new Num2  =' .$num2 . '<br>'; 

echo ' after swap New Num1= ' .$num1=$num1 - $num2;




?>