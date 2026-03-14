<!-- 6. Print variables and perform basic calculations directly within HTML using echo in
PHP. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 2;
    $b = 4;
    echo "The value of a is $a and the value of b is $b.<br>";
    echo "The sum of a and b is " . ($a + $b) . "<br>";
    echo "The difference of a and b is " . ($a - $b) .  "<br>";
    echo "The product of a and b is " . ($a * $b) . "<br>";
    echo "The quotient of a and b is " . ($a / $b) . "<br>";
    echo "The modulus of a and b is " . ($a % $b) . "<br>";     
    ?>
</body>
</html>

