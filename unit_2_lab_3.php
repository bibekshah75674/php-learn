<?php
// 3. How can you access a global variable from within a function in PHP, Write the
// program.

// Global variable
$globalVar = "I am a global variable.";
$globalCount = 100;
function accessGlobalVar() {
    // Accessing global variable using the global keyword
    global $globalVar,$globalCount;
    echo "Accessing from function: $globalVar<br>";
    echo "Accessing count from function: $globalCount";
}
// Call the function to see the output
accessGlobalVar();

?>