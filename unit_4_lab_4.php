<?php
// 4. Write a PHP program which uses a class with a constructor.
class Person {
    public $name;
    public $age;

    // Constructor to initialize properties
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // Method to display person's information
    public function displayInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
    }
}
// Creating an instance of the Person class using the constructor
$person1 = new Person("Alice", 25);
// Displaying the person's information
$person1->displayInfo();
?>