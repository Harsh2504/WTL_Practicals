<?php
// 1. Database connection
$conn = new mysqli("localhost", "root", "", "jobDB");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 2. Insert form data with prepared statements
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $name         = $_POST['name'];
    $email        = $_POST['email'];
    $phone        = $_POST['phone'];
    $position     = $_POST['position'];
    $cover_letter = $_POST['cover_letter'];

    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO applications (name, email, phone, position, cover_letter) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $phone, $position, $cover_letter);

    // Execute and check for success
    if ($stmt->execute()) {
        echo "<p style='color:green;'>✅ Application submitted successfully!</p>";
    } else {
        echo "<p style='color:red;'>Error: " . $stmt->error . "</p>";
    }

    // Close the prepared statement
    $stmt->close();
}

// 3. Delete application
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $sql = "DELETE FROM applications WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "<p style='color:orange;'>🗑️ Application deleted successfully.</p>";
    } else {
        echo "<p style='color:red;'>Delete Error: " . $conn->error . "</p>";
    }
}

// 4. Display all applications
$sql = "SELECT * FROM applications";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>📋 Submitted Applications</h2>";
    echo "<table>
            <tr>
                <th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Position</th><th>Action</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["name"]."</td>
                <td>".$row["email"]."</td>
                <td>".$row["phone"]."</td>
                <td>".$row["position"]."</td>
                <td><a href='job_application.php?delete_id=".$row["id"]."' onclick='return confirm(\"Delete this application?\")'>Delete</a></td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No job applications yet.</p>";
}

$conn->close();
?>
