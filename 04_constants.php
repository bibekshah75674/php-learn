<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants in PHP</title>
</head>
<body>
    <?php
    // Constants are like variables, but once they are defined, they cannot be changed or undefined. They are used to store values that should not be modified during the execution of a program. In PHP, constants are defined using the define() function. The syntax for defining a constant is as follows:
    // A valid constant name starts with a letter or underscore (no $ sign before the constant name).
    
    //---PHP define() Function---
    // define("CONSTANT_NAME", value);  
    // For example, we can define a constant for the value of pi as follows:
    define("PI", 3.14);
    echo "The value of pi is " . PI . "<br>";
    // Constants are global and can be accessed from anywhere in the script. They are also case-sensitive by default, but you can make them case-insensitive by passing true as the third argument to the define() function.
    define("GRAVITY", 9.8, true);
    echo "The value of gravity is " . GRAVITY . "<br>";
    echo "The value of gravity is " . gravity . "<br>"; // This will work
    // Constants are often used to define configuration values, such as database connection parameters, API keys, or any other value that should not be changed during the execution of a program.  
    

    //---PHP const Keyword---
    const SPEED_OF_LIGHT = 299792458; // This is another way to define a constant using the const keyword
    echo "The speed of light is " . SPEED_OF_LIGHT . " m/s.<br>";

    ?>  

</body>
</html>