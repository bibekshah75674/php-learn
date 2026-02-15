<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datatype in PHP</title>
</head>
<body>
    <?php
    // In PHP, there are several data types that can be used to store different types of values. The most common data types in PHP are: 

    //Note:using var_dump() function to display the data type and value of a variable
    

    // 1. String: A string is a sequence of characters enclosed in quotes. For example, "Hello world!" is a string. Strings can be defined using either single quotes (' ') or double quotes (" "). The main difference between the two is that double quotes allow for variable interpolation and escape sequences, while single quotes do not.Example:
    $name = "John";
    $friend = "Alice";
    echo "The name is $name and friend is $friend.<br>";
    var_dump($name);
    var_dump($friend);
    echo"<br>";
    echo"<br>";

    // 2. Integer: An integer is a whole number without a decimal point. For example, 10, -5, and 0 are integers. In PHP, integers can be defined in decimal (base 10), hexadecimal (base 16), octal (base 8), or binary (base 2) notation.Example:
    $age = 25;
    echo"The age is $age.<br>";
    var_dump($age);
    echo"<br>";
    echo"<br>";

    // 3. Float: A float (also known as a double) is a number with a decimal point. For example, 3.14, -0.5, and 0.0 are floats. Floats can also be defined using scientific notation, such as 1.5e3 (which is equivalent to 1500).
    $pi = 3.14;
    echo "The value of pi is $pi.<br>";
    var_dump($pi);
    echo"<br>";
    echo"<br>";


    // 4. Boolean: A boolean is a data type that can only have two values: true or false. Booleans are often used in conditional statements to control the flow of a program.
    $is_student = true;
    echo "$is_student<br>";
    var_dump($is_student);
    echo"<br>";
    echo"<br>";


    // 5. Array: An array is a collection of values that can be accessed using  an index. In PHP, arrays can be indexed (where the index is a number) or associative (where the index is a string). For example, $fruits = array("apple", "banana", "orange"); is an indexed array, while $person = array("name" => "John", "age" => 30); is an associative array.
    $students = ["Alice", "Bob", "Charlie"];
    var_dump($students);
    echo"<br>";
    echo"<br>";
    echo "The first student is ".$students[0]."<br>";
    echo"<br>";
    echo "The second student is ".$students[1]."<br>";
    echo"<br>";
    echo "The third student is ".$students[2]."<br>";
    echo"<br>";

    // 6. Object: An object is an instance of a class, which is a
    // blueprint for creating objects. Objects can have properties (variables) and methods (functions) that define their behavior. For example, if we have a class called Car, we can create an object of that class called myCar, which can have properties like color and model, and methods like start() and stop().
    class Car {
            public $color;
            public $model;
    
            public function __construct($color, $model) {
                $this->color = $color;
                $this->model = $model;
            }
    
            public function start() {
                echo "The car has started.<br>";
            }
    
            public function stop() {
                echo "The car has stopped.<br>";
            }
        }

    $myCar = new Car("red", "Toyota");
    var_dump($myCar);
    echo"<br>";
    echo"<br>";
    echo "My car is a ".$myCar->color." ".$myCar->model."<br>";
    $myCar->start();    
    $myCar->stop();
    echo"<br>";
    echo"<br>"; 

    // 7. NULL: The NULL data type represents a variable that has no value. It is often used to indicate that a variable is empty or has not been set. For example, if we have a variable $name that has not been assigned a value, it will be NULL by default.
    $name = NULL;
    var_dump($name);
    echo"<br>";
    echo"<br>";

    // 8. Resource: A resource is a special variable that holds a reference to an       
// external resource, such as a database connection or a file handle. Resources are created and managed by PHP, and they are typically used to interact with external systems or perform specific tasks that require access to system resources. For example, when we connect to a database using the mysqli_connect() function, it returns a resource that represents the database connection.        

    
    
?>
</body>
</html>