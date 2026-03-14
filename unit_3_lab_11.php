<?php
// 11.WAP to add elements to an indexed array dynamically in PHP.

$fruits = array("Apple", "Banana", "Orange"); // Initial indexed array
// Adding elements dynamically
$fruits[] = "Mango"; // Adding a new fruit to the end of the array
$fruits[] = "Grapes"; // Adding another fruit
// Display the updated array
echo "Updated Fruits Array: ";
foreach ($fruits as $fruit) {
    echo $fruit . " ";
}
echo "<br>";

array_push($fruits, "Pineapple", "Strawberry"); // Another method to append one or more elements.
echo "<br>Fruits Array after using array_push: ";
foreach ($fruits as $fruit) {
    echo $fruit . " ";
}   

?>