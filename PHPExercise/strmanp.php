<?php
    $sentence = "Life is the art of drawing without an eraser";

    $string_length = strlen($sentence);
    $string_word_count = str_word_count($sentence);
    $uppercase = strtoupper($sentence);
    $lowercase = strtolower($sentence);

    echo "<h1>String Manipulation </h1>";
    echo "<h2>Sentence: $sentence </h2>";
    echo "<h3>String Length: $string_length </h3>";    
    echo "<h3>String Word Count: $string_word_count </h3>";
    echo "<h3>String in Uppercase: $uppercase </h3>";
    echo "<h3>String in Lowercase: $lowercase </h3>";
    
?>