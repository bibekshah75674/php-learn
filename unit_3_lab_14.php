<?php
// 14.WAP to create and manipulate of a two-dimensional array in PHP.
// Create a two-dimensional array (array of arrays)
$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
// Accessing elements in the two-dimensional array
echo "Element at (0,0): " . $matrix[0][0] . "<br>"; // Output: 1
echo "Element at (1,2): " . $matrix[1][2] . "<br>"; // Output: 6
echo "Element at (2,1): " . $matrix[2][1] . "<br>"; // Output: 8      
  
// Manipulating the two-dimensional array
// Adding a new row to the matrix
$newRow = [10, 11, 12];
$matrix[] = $newRow; // Append the new row to the matrix
echo "Matrix after adding a new row:<br>";
foreach ($matrix as $row) {
    foreach ($row as $value) {
        echo $value . " ";
    }
    echo "<br>";
}
// Modifying an existing element
$matrix[0][1] = 20; // Change the value at (0,1) from 2 to 20
echo "Matrix after modifying an element:<br>";
foreach ($matrix as $row) {
    foreach ($row as $value) {
        echo $value . " ";
    }
    echo "<br>";
}   

?>