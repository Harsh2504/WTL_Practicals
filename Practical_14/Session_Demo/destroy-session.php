<?php
session_start();
session_unset();    // remove all session variables
session_destroy();  // destroy session
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Destroy Session</title>
    <style>
        body { font-family: Arial; text-align: center; margin-top: 50px; }
        .message { color: red; font-size: 18px; }
    </style>
</head>
<body>
    <p class="message">❌ Session destroyed.</p>
    <a href="start-session.php">Start Session Again</a>
</body>
</html>
