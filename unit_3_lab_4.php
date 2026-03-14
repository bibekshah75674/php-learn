<?php
// 4. WAP to use the functions which are used for HTML and URL encoding in PHP.

// a.HTML Encoding and Decoding
// htmlspecialchars() → converts special HTML characters to HTML entities.
// html_entity_decode() → converts HTML entities back to normal characters.
$str = "<h1>Hello, PHP & HTML!</h1>";

// Convert special characters to HTML entities
$encoded = htmlspecialchars($str);
echo "HTML Encoded: " . $encoded . "<br>";

// Decode back to original
$decoded = html_entity_decode($encoded);
echo "HTML Decoded: " . $decoded . "<br>";

// b.URL Encoding and Decoding
// urlencode() → converts a string to a URL-safe format.
// urldecode() → converts it back to normal.

$url = "https://example.com/search?query=PHP & HTML";

// URL encode
$encoded_url = urlencode($url);
echo "URL Encoded: " . $encoded_url . "<br>";

// URL decode
$decoded_url = urldecode($encoded_url);
echo "URL Decoded: " . $decoded_url . "<br>";
?>