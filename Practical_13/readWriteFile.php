<?php
    // Define the file name
    $filename = 'Demo.txt';

    // Reading the file
    if (file_exists($filename)) {
        $file = fopen($filename, "r"); // Open the file in read mode
        $content = fread($file, filesize($filename)); // Read the content of the file
        fclose($file); // Close the file after reading

        echo "File read successfully!<br>";
        echo "Current content of the file:<br><br>";
        echo nl2br($content); // Display the current content of the file
    } else {
        echo "File does not exist.<br>";
    }

    // Writing new content to the file
    $newContent = "\nThis is a new line of text added to the file.\n";
    
    // Open the file in append mode to add content at the end
    $file = fopen($filename, 'a'); 

    if ($file) {
        fwrite($file, $newContent); // Write the new content
        fclose($file); // Close the file after writing
        echo "<br>New content written successfully!<br>";

        // Reopen the file to read and display the updated content
        $file = fopen($filename, 'r');
        if ($file) {
            $content = fread($file, filesize($filename)); // Read the updated content
            fclose($file); // Close the file after reading
            echo "Updated content of the file:<br><br>";
            echo nl2br($content); // Display the updated content
        } else {
            echo "Failed to open the file for reading.<br>";
        }
    } else {
        echo "Failed to open the file for writing.<br>";
    }
?>
