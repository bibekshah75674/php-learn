<?php
// 12.WAP to create and access elements in an associative array in PHP.
// Creating an associative array to store user details
$userDetails = array(
    "name" => "John Doe",
    "age" => 30,
    "email" => "john.doe@example.com"
);
// Accessing elements in the associative array
echo "User Details:<br>";
echo "Name: " . $userDetails["name"] . "<br>";
echo "Age: " . $userDetails["age"] . "<br>";
echo "Email: " . $userDetails["email"] . "<br>";
?>