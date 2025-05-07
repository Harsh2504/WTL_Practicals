<!DOCTYPE html>
<html>
<head>
    <title>GET Method in PHP - Harshvardhan Patil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f2f2f2;
        }
        h2 {
            color: #333;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            width: 300px;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 6px;
            margin: 6px 0 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .output {
            margin-top: 30px;
            background-color: #e0f7fa;
            padding: 15px;
            border-radius: 6px;
        }
    </style>
</head>
<body>

<h2>GET Method Example - Enter Your Details</h2>

<form method="GET" action="">
    <label for="name">Name:</label>
    <input type="text" name="name" placeholder="Enter your name" required>

    <label for="age">Age:</label>
    <input type="number" name="age" placeholder="Enter your age" required>

    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['name']) && isset($_GET['age'])) {
    $name = htmlspecialchars($_GET['name']);
    $age = htmlspecialchars($_GET['age']);

    echo "<div class='output'>";
    echo "<h3>Received Data:</h3>";
    echo "Name: <strong>$name</strong><br>";
    echo "Age: <strong>$age</strong><br>";
    echo "</div>";
}
?>

</body>
</html>
