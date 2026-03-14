<?php
// 5. Write a function that calculates the area of a circle and returns the result in
// PHP.
function calculateCircleArea($radius) {
    $area = pi() * pow($radius, 2); // Area = π * r^2
    return $area;
}
// Test the function
$radius = 5;    
$area = calculateCircleArea($radius);
echo "The area of a circle with radius $radius is: " . round($area, 2) . "<br>";
?>