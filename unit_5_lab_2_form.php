<!-- // 2.Implement a form in PHP that includes various input types such as text, radio
// buttons, checkboxes, and a select dropdown -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Example</title>
</head>
<body>
    <form action="unit_5_lab_2_process.php" method="post">

Name: <input type="text" name="name"><br><br>

Gender:
<input type="radio" name="gender" value="Male"> Male
<input type="radio" name="gender" value="Female"> Female
<br><br>

Hobbies:
<input type="checkbox" name="hobbies[]" value="Reading"> Reading
<input type="checkbox" name="hobbies[]" value="Sports"> Sports
<input type="checkbox" name="hobbies[]" value="Music"> Music
<br><br>

Country:
<select name="country">
    <option value="Nepal">Nepal</option>
    <option value="India">India</option>
    <option value="USA">USA</option>
</select>
<br><br>

<input type="submit" value="Submit">

</form>
</body>
</html>