<?php 
    $str = "This is a string";
    echo $str;
    
    // Length of the string
    $str_len = strlen($str);
    echo "<br>";
    
    // String concatenation using .
    echo "The length of this string is".$str_len.". Thank You";

    echo "<br>";

    // Function to count number of words
    $noOfWords = str_word_count($str);
    echo "The number of words in the string are ".$noOfWords;

    echo "<br>";

    // Reverse a string
    echo "The reversed string is ".strrev($str);

    echo "<br>";

    // Searching a word in the string
    echo "Position of 'is' in the string is ".strpos($str, "is");

    echo "<br>";

    // Replacing a word in a string
    echo "Replace 'a' with 'b' ".str_replace("a", "b", $str);

?>