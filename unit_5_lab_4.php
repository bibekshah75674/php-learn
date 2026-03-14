<!-- 4. Write PHP code to validate form input for a registration form, checking for empty
fields, valid email addresses, and secure passwords. -->
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if(empty($name) || empty($email) || empty($password)){
    echo "All fields are required.<br>";
}
elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Invalid email format.<br>";
}
elseif(strlen($password) < 8){
    echo "Password must be at least 8 characters long.<br>";
}
else{
    echo "Registration successful!<br>";
}

}
?>

<form method="post">

Name: <input type="text" name="name"><br><br>

Email: <input type="text" name="email"><br><br>

Password: <input type="password" name="password"><br><br>

<input type="submit" value="Register">

</form>