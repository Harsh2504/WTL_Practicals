<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics - Harshvardhan Patil</title>
</head>
<body>
    <h1>Welcome to PHP - Practical Assignment 9</h1>
    <?php
        // Output Message
        echo "<h2>Hello World</h2>";

        // -------------------------------
        // Arithmetic Operation - Addition
        // -------------------------------
        echo "<hr><h3>Addition</h3>";
        $a = 5; 
        $b = 10; 
        $c = 15;
        echo "Sum of $a, $b and $c is: " . ($a + $b + $c) . "<br>";

        // -------------------------------
        // Factorial using for loop
        // -------------------------------
        echo "<hr><h3>Factorial</h3>";
        $num = 5;
        $fact = 1;
        for ($i = 1; $i <= $num; $i++) {
            $fact *= $i;
        }
        echo "Factorial of $num is $fact<br>";

        // -------------------------------
        // Greatest of 3 Numbers
        // -------------------------------
        echo "<hr><h3>Greatest Number</h3>";
        $x = 30; $y = 50; $z = 20;
        $greatest = ($x > $y && $x > $z) ? $x : (($y > $z) ? $y : $z);
        echo "Greatest among $x, $y and $z is: $greatest<br>";

        // -------------------------------
        // Conditional - If Else
        // -------------------------------
        echo "<hr><h3>If Else Example</h3>";
        $marks = 75;
        if ($marks >= 90) {
            echo "Grade: A+";
        } elseif ($marks >= 75) {
            echo "Grade: A";
        } else {
            echo "Grade: B";
        }

        // -------------------------------
        // Switch Case Example
        // -------------------------------
        echo "<hr><h3>Switch Case</h3>";
        $day = 3;
        switch ($day) {
            case 1: echo "Monday"; break;
            case 2: echo "Tuesday"; break;
            case 3: echo "Wednesday"; break;
            case 4: echo "Thursday"; break;
            case 5: echo "Friday"; break;
            case 6: echo "Saturday"; break;
            case 7: echo "Sunday"; break;
            default: echo "Invalid day";
        }

        // -------------------------------
        // For Loop
        // -------------------------------
        echo "<hr><h3>For Loop</h3>";
        for ($i = 1; $i <= 5; $i++) {
            echo "Number: $i<br>";
        }

        // -------------------------------
        // While Loop
        // -------------------------------
        echo "<hr><h3>While Loop</h3>";
        $i = 1;
        while ($i <= 5) {
            echo "Number: $i<br>";
            $i++;
        }

        // -------------------------------
        // Do While Loop
        // -------------------------------
        echo "<hr><h3>Do While Loop</h3>";
        $i = 1;
        do {
            echo "Number: $i<br>";
            $i++;
        } while ($i <= 5);

        // -------------------------------
        // Functions in PHP
        // -------------------------------

        echo "<hr><h3>PHP Functions</h3>";

        // Simple function
        function greet() {
            echo "Hello, welcome to PHP functions!<br>";
        }
        greet();

        // Function with default parameters
        function greetUser($name = "Guest") {
            echo "Hello, $name!<br>";
        }
        greetUser("Harsh");
        greetUser();

        // Function with parameters
        function add($a, $b) {
            $sum = $a + $b;
            echo "Sum of $a and $b is: $sum<br>";
        }
        add(5, 10);

        // Function with return value
        function factorial($n) {
            $fact = 1;
            for ($i = 1; $i <= $n; $i++) {
                $fact *= $i;
            }
            return $fact;
        }
        echo "Factorial of 5 is: " . factorial(5) . "<br>";
    ?>
    
    <hr>
</body>
</html>
