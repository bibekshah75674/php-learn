<?php
// 16.WAP to convert a variable to an array and vice-versa in PHP.

// 1️. Convert variable to array
$var = "Hello PHP";
$arrayVar = (array)$var;
print_r($arrayVar);
echo "<br>";

// 2️. Convert array to variable
$array = ["Hello PHP"];
$varFromArray = $array[0];
echo $varFromArray;

?>