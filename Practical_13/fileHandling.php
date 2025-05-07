<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Handling - Harshvardhan Patil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: white;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 50%;
            max-width: 600px;
        }

        h2 {
            text-align: center;
            color: #4A90E2;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-weight: bold;
        }

        input[type="file"],
        select,
        button {
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }

        .output {
            margin-top: 20px;
            background-color: #f1f1f1;
            padding: 15px;
            border-radius: 6px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
        }

        pre {
            background-color: #333;
            color: white;
            padding: 10px;
            border-radius: 5px;
            font-size: 1rem;
        }

    </style>
</head>
<body>

    <div class="container">
        <h2>File Handling - Harshvardhan Patil</h2>

        <form action="" method="post" enctype="multipart/form-data">
            <label for="file">Choose a file to upload:</label>
            <input type="file" name="file" id="file" required>

            <label for="operation">Select an operation:</label>
            <select name="operation" id="operation" required>
                <option value="lines">Count Lines</option>
                <option value="characters">Count Characters</option>
                <option value="content">Display Content</option>
            </select>

            <button type="submit" name="submit">Process File</button>
        </form>

        <?php
        if (isset($_POST['submit']) && isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
            $filePath = $_FILES['file']['tmp_name'];
            $operation = $_POST['operation'];

            if (file_exists($filePath)) {
                $fileContent = file_get_contents($filePath);

                echo '<div class="output">';
                if ($operation === 'lines') {
                    echo "<p><strong>Number of lines:</strong> " . count(file($filePath)) . "</p>";
                } elseif ($operation === 'characters') {
                    echo "<p><strong>Number of characters:</strong> " . strlen($fileContent) . "</p>";
                } elseif ($operation === 'content') {
                    echo "<h3>File Content:</h3><pre>" . htmlspecialchars($fileContent) . "</pre>";
                } else {
                    echo "<p>Invalid operation selected.</p>";
                }
                echo '</div>';
            } else {
                echo "<p>File does not exist.</p>";
            }
        }
        ?>
    </div>

</body>
</html>
