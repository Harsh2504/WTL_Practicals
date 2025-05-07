<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $age = $_POST['age'];

    echo "<h2>Registration Details:</h2>";
    echo "Full Name: $name <br>";
    echo "Email: $email <br>";
    echo "Password: $password <br>";
    echo "Age: $age <br>";
}
?>
