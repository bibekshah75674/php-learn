<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables in PHP</title>
</head>
<body>
    <?php
    // Variables are used to store data in a program. They are like containers that hold values. In PHP, variables are represented by a dollar sign ($) followed by the variable name. For example, $name, $age, $income etc.
    $name = "Bibek";
    $income = 100;

    echo "This persons name is $name and his income is Rs.$income.<br>";
    echo "$name is very handsome but has low income.<br>";

    // Rules for creating variables in php
    // 1. A variable must start with the $ sign, followed by the name of the variable
    // 2. A variable must start with a letter or an underscore character
    // 3. A variable name cannot start with a number
    // 4. Variable can only contain letters, numbers and underscores (A-z, 0-9, and _ )
    // 5. Variable names are case sensitive ($age and $AGE are two different variables)
    // 6. Variable names should not be a reserved word

    $user_name = "John";
    $number = 10;
    $age = 25;
    echo "User name is $user_name, number is $number and age is $age.";

    
    ?>
</body>
</html>