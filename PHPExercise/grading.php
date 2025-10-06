<?php
    $math = 88;
    $english = 89;
    $science = 94;

    $average = ($math + $english + $science) / 3;

    
    if ($average >= 95){
        $grade = "A";
    } elseif ($average >= 90){
        $grade = "B";
    } elseif ($average >= 85){
        $grade = "C";
    } elseif ($average >= 80){
        $grade = "D";
    } elseif ($average >= 75){
        $grade = "E";
    } else {
        $grade = "F";
    }
    echo "<h2>Grading System</h2>";
    echo "<h2>Math: $math</h2>";
    echo "<h2>English: $english</h2>";
    echo "<h2>Science: $science</h2>";
    echo "<h2>Average: $average</h2>";
    echo "<h2>Grade: $grade</h2>";

?>