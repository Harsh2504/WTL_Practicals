<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OOP Concepts in PHP - Harshvardhan Patil</title>
</head>
<body>
    <h1>Implementation of Object Oriented Programming Concepts in PHP</h1>

    <?php

    echo "<h2>1. Class and Object</h2>";
    class Car {
        public $brand;

        public function setBrand($brand) {
            $this->brand = $brand;
        }

        public function getBrand() {
            return $this->brand;
        }
    }

    $car = new Car();
    $car->setBrand("Toyota");
    echo "Car Brand: " . $car->getBrand() . "<br>";

    echo "<h2>2. Inheritance</h2>";
    class Animal {
        public function sound() {
            echo "Some sound<br>";
        }
    }

    class Dog extends Animal {
        public function sound() {
            echo "Dog says: Bark! Bark!<br>";
        }
    }

    $dog = new Dog();
    $dog->sound();

    echo "<h2>3. Polymorphism</h2>";
    class Shape {
        public function draw() {
            echo "Drawing a shape<br>";
        }
    }

    class Circle extends Shape {
        public function draw() {
            echo "Drawing a circle<br>";
        }
    }

    class Square extends Shape {
        public function draw() {
            echo "Drawing a square<br>";
        }
    }

    function renderShape(Shape $shape) {
        $shape->draw();
    }

    renderShape(new Circle());
    renderShape(new Square());

    echo "<h2>4. Abstract Class</h2>";
    abstract class Vehicle {
        abstract public function start();
        public function stop() {
            echo "Vehicle stopped<br>";
        }
    }

    class Bike extends Vehicle {
        public function start() {
            echo "Bike started<br>";
        }
    }

    $bike = new Bike();
    $bike->start();
    $bike->stop();

    echo "<h2>5. Interface</h2>";
    interface Logger {
        public function log($message);
    }

    class FileLogger implements Logger {
        public function log($message) {
            echo "Logging to file: $message <br>";
        }
    }

    $logger = new FileLogger();
    $logger->log("This is an interface example");

    echo "<h2>6. Static Keyword</h2>";
    class StaticDemo {
        public static $count = 0;

        public function increment() {
            self::$count++;
            echo "Static count: " . self::$count . "<br>";
        }
    }

    $obj1 = new StaticDemo();
    $obj1->increment();

    $obj2 = new StaticDemo();
    $obj2->increment(); // retains static value

    echo "<h2>7. Encapsulation</h2>";
    class Student {
        private $name;

        public function setName($n) {
            $this->name = $n;
        }

        public function getName() {
            return $this->name;
        }
    }

    $student = new Student();
    $student->setName("Harshvardhan");
    echo "Student Name: " . $student->getName() . "<br>";

    echo "<h2>8. Variable Scope (Local, Global, Static)</h2>";
    function variableDemo() {
        $localVar = "I am local";
        echo $localVar . "<br>";
    }

    $globalVar = "I am global";

    function showGlobal() {
        global $globalVar;
        echo $globalVar . "<br>";
    }

    function counter() {
        static $count = 0;
        $count++;
        echo "Static Count: $count <br>";
    }

    variableDemo();
    showGlobal();
    counter();
    counter();
    counter();

    ?>

    <hr>
</body>
</html>
