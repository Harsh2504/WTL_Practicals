<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
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

        h1 {
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

    </style>
</head>
<body>

    <div class="container">
        <h1>File Upload</h1>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK) {
                $uploadDir = 'uploads/';

                // Check if the upload directory exists, if not, create it
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }

                // Get file info
                $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
                $fileName = $_FILES['uploadedFile']['name'];
                $fileSize = $_FILES['uploadedFile']['size'];
                $fileType = $_FILES['uploadedFile']['type'];
                $fileNameCmps = pathinfo($fileName);
                $fileExtension = strtolower($fileNameCmps['extension']);

                // Define allowed file extensions
                $allowedExtensions = ['jpg', 'png', 'gif', 'pdf', 'txt'];

                if (in_array($fileExtension, $allowedExtensions)) {
                    // Set the destination path
                    $destPath = $uploadDir . $fileName;

                    // Move the uploaded file to the destination directory
                    if (move_uploaded_file($fileTmpPath, $destPath)) {
                        echo "<div class='output'><p>File has been successfully uploaded to: $destPath</p></div>";
                    } else {
                        echo "<div class='output'><p>Error moving the uploaded file.</p></div>";
                    }
                } else {
                    echo "<div class='output'><p>Upload failed. Allowed file types: " . implode(', ', $allowedExtensions) . "</p></div>";
                }
            } else {
                echo "<div class='output'><p>Error in file upload: " . $_FILES['uploadedFile']['error'] . "</p></div>";
            }
        }
        ?>

        <form action="" method="post" enctype="multipart/form-data">
            <label for="fileUpload">Choose a file to upload:</label>
            <input type="file" name="uploadedFile" id="fileUpload" required>
            <button type="submit">Upload</button>
        </form>
    </div>

</body>
</html>
