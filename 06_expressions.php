<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expressions in PHP</title>
</head>
<body>
    <?php
    // An expression is a combination of values, variables, operators, and function calls that can be evaluated to produce a result. In PHP, expressions are used to perform calculations, manipulate data, and control the flow of a program. For example, the following code contains an expression that adds two numbers together:

    $a = 10;
    $b = 20;
    $sum = $a + $b; // This is an expression that adds the values of $a and $b together and assigns the result to the variable $sum
    echo "The sum of $a and $b is $sum.<br>";   

    // Expressions can also include function calls. For example, the following code contains an expression that calculates the length of a string:

    $name = "John";
    $length = strlen($name); // This is an expression that calls the strlen() function to calculate the length of the string stored in the variable $name and assigns the result to the variable $length
    echo "The length of the name $name is $length.<br>";
    
    // Expressions can also include logical operators, such as && (and), || (or), and ! (not). For example, the following code contains an expression that checks if a number is greater than 10 and less than 20:
    $number = 15;
    $result = ($number > 10) && ($number < 20); // This
    // is an expression that checks if the value of $number is greater than 10 and less than 20, and assigns the result (true or false) to the variable $result
    echo "Is the number $number greater than 10 and less than 20? ". ($result ? "Yes" : "No") . "<br>"; // This uses a ternary operator to output "Yes" if $result is true and "No" if $result is false
    ?>  
</body>
</html>