<?php
// 7. Generate the current date and time in different formats using PHP functions.
// Current date and time
$currentDateTime = date("Y-m-d H:i:s"); // Format: 2024-06-01 12:00:00
echo "Current Date and Time: $currentDateTime<br>";
// Different formats
echo "Date (d/m/Y): " . date("d/m/Y") . "<br>"; //day/month/year
echo "Date (F j, Y): " . date("F j, Y") . "<br>"; // Month day, Year
echo "Time (h:i A): " . date("h:i A") . "<br>"; // Time in 12-hour format with AM/PM
echo "Day of the week: " . date("l") . "<br>";  // Full name of the day of the week
echo "Unix Timestamp: " . time() . "<br>"; // Current Unix timestamp        
?>