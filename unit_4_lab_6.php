<?php
// 6. How can reflection be used in PHP to examine and manipulate classes and objects?
// Using ReflectionClass to examine a class
class SampleClass { 
    public $property1 = "I am a property.";
    public function method1() {
        return "I am a method.";
    }
}   
$reflection = new ReflectionClass('SampleClass');
// Get class name
echo "Class Name: " . $reflection->getName() . "<br>";
// Get properties
$properties = $reflection->getProperties();
echo "Properties: <br>";
foreach ($properties as $property) {
    echo "- " . $property->getName() . "<br>";
}   
// Get methods
$methods = $reflection->getMethods();
echo "Methods: <br>";
foreach ($methods as $method) {
    echo "- " . $method->getName() . "<br>";
}

?>