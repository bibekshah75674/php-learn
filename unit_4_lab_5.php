<?php
// 5. Write a PHP program which uses an anonymous class.
$anonymousClass = new class {
    public function sayHello() {
        return "Hello from the anonymous class!";
    }
};
// Calling the method of the anonymous class
echo $anonymousClass->sayHello();   
?>