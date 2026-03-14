<?php
// 5. Demonstrate including external PHP files using require and include statements.

// a.Include the greetings.php file using include statement
// include – If the file is missing, PHP will show a warning but continue executing the script.
// Code:

include 'greetings.php';
echo sayHello("Bibek")."<br>";

echo "This will still run even if greetings.php is missing.<br><br>";

// b.Require the greetingsTwo.php file using require statement
// require – If the file is missing, PHP will show a fatal error and stop executing.
// Code:

require 'greetingsTwo.php';
echo sayHello("Bibek")."<br>";
echo "This will not run if greetingsTwo.php is missing.";
?>