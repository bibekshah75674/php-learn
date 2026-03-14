<?php
// 9. WAP to use regular expressions in PHP for pattern matching in strings.

$str = "My email is bibek.shah@example.com and my other email is test123@mail.com.";

// Regular expression pattern for email
$pattern_email = "/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}/i";

// 1.preg_match() → find the first email
if (preg_match($pattern_email, $str, $matches)) {
    echo "First email found: " . $matches[0] . "<br>";
} else {
    echo "No email found<br>";
}

// 2️. preg_match_all() → find all emails in the string
if (preg_match_all($pattern_email, $str, $all_matches)) {
    echo "All emails found: " . implode(", ", $all_matches[0]) . "<br>";
} else {
    echo "No emails found<br>";
}
?>