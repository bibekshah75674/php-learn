<?php
// 10.WAP to create an array and access its elements in PHP.

$fruits = ["Apple", "Banana", "Mango", "Orange"];

// Access elements by index
echo "First fruit: " . $fruits[0] . "<br>";
echo "Second fruit: " . $fruits[1] . "<br>";
echo "Third fruit: " . $fruits[2] . "<br>";
echo "Fourth fruit: " . $fruits[3] . "<br>";

// Loop through all elements
echo "All fruits: ";
for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i] . " ";
}
echo "<br>";
?>