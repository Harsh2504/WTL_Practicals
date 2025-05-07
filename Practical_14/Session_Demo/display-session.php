<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Display Session</title>
    <style>
        body { font-family: Arial; text-align: center; margin-top: 50px; }
        .info { font-size: 18px; }
    </style>
</head>
<body>
    <h2>👤 Session Data</h2>
    <div class="info">
        <?php
        if (isset($_SESSION["username"]) && isset($_SESSION["email"])) {
            echo "Username: <strong>" . $_SESSION["username"] . "</strong><br>";
            echo "Email: <strong>" . $_SESSION["email"] . "</strong>";
        } else {
            echo "❌ No session data found!";
        }
        ?>
    </div>
    <br><br>
    <a href="destroy-session.php">Destroy Session</a>
</body>
</html>
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Display Session</title>
    <style>
        body { font-family: Arial; text-align: center; margin-top: 50px; }
        .info { font-size: 18px; }
    </style>
</head>
<body>
    <h2>👤 Session Data</h2>
    <div class="info">
        <?php
        if (isset($_SESSION["username"]) && isset($_SESSION["email"])) {
            echo "Username: <strong>" . $_SESSION["username"] . "</strong><br>";
            echo "Email: <strong>" . $_SESSION["email"] . "</strong>";
        } else {
            echo "❌ No session data found!";
        }
        ?>
    </div>
    <br><br>
    <a href="destroy-session.php">Destroy Session</a>
</body>
</html>
