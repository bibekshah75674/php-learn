<?php
// 1. Write a function that receives a string and checks if it's a palindrome (reads the same backward) in PHP.
function checkPalindrome($str) {
    // Reverse the string
    $reverse = strrev($str);

    // Compare original and reversed string
    if ($str == $reverse) {
        echo "$str is a Palindrome.";
    } else {
        echo "$str is NOT a Palindrome.";
    }
}

// Test the function
checkPalindrome("level");    
?>