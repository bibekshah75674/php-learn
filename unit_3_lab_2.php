<?php
// 2. WAP to access individual characters in a string in PHP.
$string = "Hello, World!";
// Accessing individual characters using indexing
echo "First character: $string[0]<br>"; // Output: H
echo "Seventh character: $string[7]<br>"; // Output: W
echo "Twelfth character: $string[12]<br>"; // Output: !

// looping through each character in the string
echo "Characters in the string:<br>";
for ($i = 0; $i < strlen($string); $i++) {
    echo "Character $i: " . $string[$i] . "<br>";
}

?>