<?php
// 3. Write a PHP class declaration for a "Person" class with attributes like name,
// age, and address.
class Person {
    public $name;
    public $age;
    public $address;

    // Constructor to initialize the attributes
    public function __construct($name, $age, $address) {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }

    // Method to display person's information
    public function displayInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "Address: " . $this->address . "<br>";
    }
}
// Creating an instance of the Person class
$person1 = new Person("John Doe", 30, "123 Main St, An  ytown, USA");
// Displaying the person's information      
$person1->displayInfo();

?>