<?php
// 1. Demonstrate different ways to print a string in PHP.

// a. Using echo
echo "Hello, World!"; // Using echo
echo "This is PHP string output using echo.<br>";

// b. Using print
print "Hello, World!"; // Using print
print "This is PHP string output using print.<br>";             

// c. Using printf
$name = "Bibek";    
$age = 25;
$height = 5.6;
// %s for string, %d for integer, %f for float
printf("Hello, %s! You are %d years old and %.1f feet tall.", $name, $age, $height); // Using printf
echo "<br>";

// d. Using print_r (useful for printing arrays and objects)
$fruits = ["Apple", "Banana", "Cherry"];
print_r($fruits); // Using print_r to print an array
echo "<br>";

// e. Using var_dump (useful for debugging, shows data type and value)
var_dump($fruits); // Using var_dump to print an array with data types
echo "<br>";

// f. Using heredoc syntax (for multi-line strings)
$heredocString = <<<EOD
This is a multi-line string using heredoc syntax.
It allows for variable interpolation and is useful for large blocks of text.
EOD;
echo $heredocString; // Using heredoc syntax to print a multi-line string

?>