<?php
// 3. WAP to remove whitespace from the beginning and end of a string in PHP.
$str = "   Hello, PHP!   ";

echo "<pre>Original string: '" . $str . "'<br></pre>";

// Remove whitespace from both ends
$trimmed = trim($str);
echo "<pre>After trim(): '" . $trimmed . "'<br></pre>";

// Remove whitespace from the left only
$leftTrimmed = ltrim($str);
echo "<pre>After ltrim(): '" . $leftTrimmed . "'<br></pre>";

// Remove whitespace from the right only
$rightTrimmed = rtrim($str);
echo "<pre>After rtrim(): '" . $rightTrimmed . "'<br></pre>";
?>