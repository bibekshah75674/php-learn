<?php
// 2. Demonstrate how to access the properties of an object in PHP. Include examples of
// both public and private properties.
class Car {
    public $make;
    private $model;

    public function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }

    public function getModel() {
        return $this->model;
    }
}
$car1 = new Car("Toyota", "Corolla");
// Accessing public property
echo "Car Make: " . $car1->make . "<br>"; // Output:
// Accessing private property using a public method
echo "Car Model: " . $car1->getModel() . "<br>"; // Output: Corolla

?>