<?php
// 6. Write an anonymous function that checks if a string is empty in PHP.
$checkEmpty = function($str) {
    if (empty($str)) {
        return "The string is empty.";
    } else {
        return "The string is not empty.";
    }
};
// Test the anonymous function
$string1 = "";
$string2 = "Hello, World!";
echo $checkEmpty($string1) . "<br>"; // Output: The string is empty
echo $checkEmpty($string2) . "<br>"; // Output: The string is not empty

?>