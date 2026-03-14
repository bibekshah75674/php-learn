<?php
// 7. WAP to use string manipulation functions like strlen, substr, and str_replace in PHP.
$str = "Hello, PHP World!";

// 1️. strlen() → returns the length of the string
$length = strlen($str);
echo "Length of string: " . $length . "<br>";

// 2️. substr() → extracts a part of the string
$part = substr($str, 7, 3); // start at index 7, length 3
echo "Substring (index 7, length 3): " . $part . "<br>";

// 3️. str_replace() → replaces text in a string
$replaced = str_replace("PHP", "JavaScript", $str);
echo "After str_replace: " . $replaced . "<br>";

?>