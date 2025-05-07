<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculations - Harshvardhan Patil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f5f9;
            margin: 40px;
        }
        h2 {
            color: #333;
        }
        form, .output {
            background-color: #fff;
            padding: 20px;
            width: 400px;
            border-radius: 8px;
            box-shadow: 0 0 10px #ccc;
        }
        input[type="number"] {
            width: 100%;
            padding: 6px;
            margin-bottom: 16px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            width: 100%;
            border: none;
            border-radius: 4px;
            font-weight: bold;
        }
        .output {
            margin-top: 30px;
        }
    </style>
</head>
<body>

<h2>Enter Numbers for Calculation</h2>

<form method="POST" action="">
    <label>Enter First Number:</label>
    <input type="number" name="num1" required>

    <label>Enter Second Number:</label>
    <input type="number" name="num2" required>

    <label>Enter Third Number:</label>
    <input type="number" name="num3" required>

    <label>Enter Number for Factorial:</label>
    <input type="number" name="factNum" min="0" required>

    <label>Enter Marks for Grade:</label>
    <input type="number" name="marks" min="0" max="100" required>

    <input type="submit" name="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get values
    $num1 = (int)$_POST['num1'];
    $num2 = (int)$_POST['num2'];
    $num3 = (int)$_POST['num3'];
    $factNum = (int)$_POST['factNum'];
    $marks = (int)$_POST['marks'];

    // Sum, average, and largest
    $sum = $num1 + $num2 + $num3;
    $avg = $sum / 3;
    $largest = max($num1, $num2, $num3);

    // Factorial calculation
    function factorial($n) {
        if ($n < 0) return "Invalid";
        $fact = 1;
        for ($i = 1; $i <= $n; $i++) {
            $fact *= $i;
        }
        return $fact;
    }

    $factResult = factorial($factNum);

    // Grade calculation
    function getGrade($marks) {
        if ($marks >= 90) return "A+";
        elseif ($marks >= 80) return "A";
        elseif ($marks >= 70) return "B";
        elseif ($marks >= 60) return "C";
        elseif ($marks >= 50) return "D";
        else return "Fail";
    }

    $grade = getGrade($marks);

    echo "<div class='output'>";
    echo "<h3>Calculation Results:</h3>";
    echo "Sum of $num1, $num2, $num3 = <strong>$sum</strong><br>";
    echo "Average = <strong>" . round($avg, 2) . "</strong><br>";
    echo "Largest Number = <strong>$largest</strong><br><br>";

    echo "Factorial of $factNum = <strong>$factResult</strong><br><br>";

    echo "Marks = <strong>$marks</strong> → Grade = <strong>$grade</strong><br>";
    echo "</div>";
}
?>

</body>
</html>
