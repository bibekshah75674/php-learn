<?php
// 17.WAP to use loops to traverse both indexed and associative arrays in PHP.

// Traversing an indexed array
$fruits = array("Apple", "Banana", "Mango", "Orange");  
echo "Traversing Indexed Array:<br>";
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
echo "<br>";

// Traversing an associative array
$userDetails = array(
    "name" => "John Doe",
    "age" => 30,
    "email" => "john.doe@example.com"
);
echo "Traversing Associative Array:<br>";
foreach ($userDetails as $key => $value) {
    echo $key . ": " . $value . "<br>";
}
?>