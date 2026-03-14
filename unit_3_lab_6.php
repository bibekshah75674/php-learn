<?php
// 6. Demonstrate various methods for comparing two strings in PHP.

$str1 = "Hello World";
$str2 = "hello world";
$str3 = "Hello PHP";

// 1. Using equality operator (==) → checks value, case-sensitive
if ($str1 == $str2) {
    echo "str1 == str2: Strings are equal<br>";
} else {
    echo "str1 == str2: Strings are NOT equal<br>";
}

// 2️. Using identity operator (===) → checks value AND type (case-sensitive)
if ($str1 === $str2) {
    echo "str1 === str2: Strings are identical<br>";
} else {
    echo "str1 === str2: Strings are NOT identical<br>";
}

// 3️. Using strcmp() → returns 0 if equal, >0 or <0 if different (case-sensitive)
$result = strcmp($str1, $str2);
echo "strcmp(str1, str2): " . $result . "<br>";

// 4️. Using strcasecmp() → case-insensitive comparison
$result = strcasecmp($str1, $str2);
echo "strcasecmp(str1, str2): " . $result . "<br>";

// 5️. Using strncmp() → compares first n characters (case-sensitive)
$result = strncmp($str1, $str3, 5); // compare first 5 characters
echo "strncmp(str1, str3, 5): " . $result . "<br>";

// 6️. Using substr() and equality → partial match
if (substr($str1, 0, 5) == substr($str3, 0, 5)) {
    echo "First 5 characters of str1 and str3 are equal<br>";
} else {
    echo "First 5 characters of str1 and str3 are NOT equal<br>";
}

?>