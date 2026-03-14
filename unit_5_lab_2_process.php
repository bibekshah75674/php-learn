<?php

$name = $_POST['name'];
$gender = $_POST['gender'];
$country = $_POST['country'];
$hobbies = $_POST['hobbies'];

echo "Name: $name <br>";
echo "Gender: $gender <br>";
echo "Country: $country <br>";

echo "Hobbies: ";
foreach($hobbies as $hobby){
    echo $hobby . " ";
}

?>