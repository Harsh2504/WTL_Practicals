<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookie Demo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 50px;
            text-align: center;
        }
        .box {
            background: white;
            padding: 30px;
            margin: auto;
            width: 400px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            border-radius: 8px;
        }
        h1 {
            color: #4CAF50;
        }
    </style>
</head>
<body>

<div class="box">
    <h1>PHP Cookie Example</h1>

    <?php
    // Set the cookie (must be done before any output)
    $cookie_name = "user";
    $cookie_value = "harshvardhan patil";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 7), "/"); // expires in 7 days

    // Message after setting
    echo "<p><strong>Cookie has been set!</strong></p>";

    // Show the cookie value (if available)
    if (isset($_COOKIE[$cookie_name])) {
        echo "<p>Welcome back, <strong>" . $_COOKIE[$cookie_name] . "</strong>!</p>";
    } else {
        echo "<p>Cookie not found or not set yet.</p>";
    }
    ?>
</div>

</body>
</html>
