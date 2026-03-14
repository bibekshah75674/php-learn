<?php
// 4. Write code demonstrating loop controls like for, while, and do-while loops in
// PHP.

// for loop
echo "<h3>For Loop:<br></h3>";
for ($i = 1; $i <= 5; $i++) {
    echo "Iteration: $i<br>";
}   

// while loop
echo "<h3>While Loop:<br></h3>";    
$j = 1;
while ($j <= 5) {
    echo "Iteration: $j<br>";
    $j++;
}

// do-while loop
echo "<h3>Do-While Loop:<br></h3>";
$k = 1;
do {            
    echo "Iteration: $k<br>";
    $k++;
} while ($k <= 5);  
?>