<?php
// 3. Write expressions using various mathematical, comparison, and logical operators
// in PHP.

// Mathematical Operators
$a = 10;
$b = 5;
$sum = $a + $b; // Addition
$difference = $a - $b; // Subtraction
$product = $a * $b; // Multiplication
$quotient = $a / $b; // Division
$modulus = $a % $b; // Modulus
echo "<h3>Mathematical Operators:<br></h3>";
echo "a = $a,b = $b<br><br>";
echo "Sum: $sum<br>";
echo "Difference: $difference<br>";
echo "Product: $product<br>";
echo "Quotient: $quotient<br>";
echo "Modulus: $modulus<br><br>";

// Comparison Operators
$x = 10;
$y = 20;

echo "<h3>Comparison Operators:<br></h3>";
echo "x = $x,y = $y<br><br>";

echo "x==y: " . ($x == $y ? "True" : "False") . "<br>";
echo "x!=y: " . ($x != $y ? "True" : "False") . "<br>";
echo "x>y: " . ($x > $y ? "True" : "False") . "<br>";

echo "x>=y: " . ($x >= $y ? "True" : "False") . "<br>";
echo "x<=y: " . ($x <= $y ? "True" : "False") . "<br><br>";

// Logical Operators    
$p = 10;
$q = 20;         
echo "<h3>Logical Operators:<br></h3>";     
echo "p = $p,q = $q<br><br>";         
echo "p > 5 AND q < 25: " . ($p > 5 && $q < 25 ? "True" : "False") . "<br>";
echo "p < 15 OR q > 25: " . ($p < 15 || $q > 25 ? "True" : "False") . "<br>";
echo "p is not equal to q: " . (!($p == $q) ? "True" : "False") . "<br>";       

?>