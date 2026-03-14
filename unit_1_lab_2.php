<?php
// 1.simple declaration and initialization
$name = "Bibek shah";
$age = 22;
echo"Name: $name <br>";
echo"Age: $age <br><br>";

// 2.Declare first and then initialize
$city;
$city = "Kathmandu";
echo"City: $city <br><br>";

// 3.Multiple variables in a single line
$a = $b = $c = 10;
echo"a: $a<br>";
echo"b: $b<br>";
echo"c: $c<br><br>";

// 4.Variable variables:A variable whose name comes from another variable.
$var = "name";
$$var = "Bibek";

echo"Variable variable: $name<br>";
?>




