<?php
include 'db_connect.php'; // Include the database connection file

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $full_names = trim($_POST['full_names']);
    $email_or_phone = trim($_POST['email_or_phone']);
    $password = trim($_POST['password']);

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and bind
    $stmt = $connection->prepare("INSERT INTO users (full_names, email_or_phone, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $full_names, $email_or_phone, $hashed_password);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $connection->close();
} else {
    echo "Invalid request.";
}
?>
