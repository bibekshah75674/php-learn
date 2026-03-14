<?php
// 4. Write a function that swaps the values of two variables using parameter
// references in PHP.
function swap(&$a, &$b) {
    $temp = $a; // Store the value of a in a temporary variable
    $a = $b;    // Assign the value of b to a
    $b = $temp; // Assign the value of temp (original a) to b
}           
// Test the function
$x = 5;
$y = 10;
echo "Before swapping: x = $x, y = $y<br>";
swap($x, $y);
echo "After swapping: x = $x, y = $y<br>";
?>