<?php
$a = 5;
$b = 10;

echo "Before swapping: a = $a, b = $b<br>";
// temp var
$temp = $a; 
$a = $b;
$b = $temp;

echo "After swapping: a = $a, b = $b";
?>