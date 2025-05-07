<?php
session_start();

$_SESSION["username"] = "Harshvardhan Patil";
$_SESSION["email"] = "harshpatil@gmail.com";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Start Session</title>
    <style>
        body { font-family: Arial; text-align: center; margin-top: 50px; }
        .message { color: green; font-size: 18px; }
    </style>
</head>
<body>
    <p class="message">✅ Session started and data stored successfully!</p>
    <a href="display-session.php">View Session Data</a>
</body>
</html>
