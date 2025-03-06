<?php
$number = 0;
if ($number > 0){
    echo "its positive \n"; 
    if (($number % 2) == 0){
    echo "the number is Even";
    } else {
    echo "the number is Odd";
    }
} elseif ($number < 0){
    echo "its negative \n";
    if (($number % 2) == 0){
        echo "the number is Even";
    } else {
        echo "the number is Odd";
    }
}else{
    echo "the number is zero";
}
?>