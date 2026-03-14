<?php
// 1.WAP to perform “action" and "method" attributes in an HTML form. How are they
// utilized in PHP form processing?
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['username'];
    $email = $_POST['email'];

    echo "<h3>Form submitted successfully!</h3>";
    // Process the form data (for example, display it)
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
}

?>

