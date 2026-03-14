<!-- // 5. WAP to prevent SQL injection by escaping strings in PHP. -->
<?php
// Step 1: Connect to the database
$conn = new mysqli("localhost", "root", "", "test_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: User input (simulated)
// This could come from a form in a real scenario
$user_input = "O'Reilly";

// Step 3: Use Prepared Statement to prevent SQL injection
$stmt = $conn->prepare("SELECT * FROM users WHERE name = ?");
$stmt->bind_param("s", $user_input); // 's' indicates the parameter is a string

// Step 4: Execute and fetch results
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "User: " . $row['name'] . "<br>";
    }
} else {
    echo "No users found.";
}

// Step 5: Close statement and connection
$stmt->close();
$conn->close();

/*
Sample Output:
User: O'Reilly
OR (if no matching record):
No users found.
*/
?>