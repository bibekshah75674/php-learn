<?php
// 2. Demonstrate how to call a function within another function in PHP.
function greet($name) {
    return "Hello, $name!";
}   
function welcome($name) {
    $greeting = greet($name); // Calling the greet function within welcome function
    return "$greeting Welcome to PHP programming!";
}
echo welcome("Bibek");
?>