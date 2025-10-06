<?php 
    $x = 30;
    $y = 220;

    echo "<h1>Swap Variable</h1>";
    echo "<h1>Before: X = $x, Y= $y </h1>";

    $temp = $x;
    $x = $y;
    $y = $temp;

    echo "<h1>After: X = $x, Y = $y </h1>";
    
?>