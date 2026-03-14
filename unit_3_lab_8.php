<?php
// 8. WAP to use strpos and stristr functions for searching within strings in PHP.

$str = "Hello, PHP World!";
// 1️. strpos() → finds the position of the first occurrence of a substring
$position = strpos($str, "PHP");
if ($position !== false) {
    echo "Position of 'PHP': " . $position . "<br>";
} else {
    echo "'PHP' not found in the string.<br>";
}
// 2️. stristr() → finds the first occurrence of a substring and returns the rest of the string
$result = stristr($str, "PHP"); 
if ($result !== false) {
    echo "String from 'PHP' onwards: " . $result . "<br>";
} else {
    echo "'PHP' not found in the string.<br>";
}
        
?>