<?php
session_start(); // Start a session if needed
include 'db_connect.php'; // Include the database connection file

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    // Prepare and bind
    $stmt = $connection->prepare("INSERT INTO contact_messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
    
    if ($stmt === false) {
        die("Prepare failed: " . htmlspecialchars($connection->error));
    }

    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Message sent successfully!";
    } else {
        echo "Error sending message: " . htmlspecialchars($stmt->error);
    }

    // Close the statement and connection
    $stmt->close();
    $connection->close();
} else {
    echo "Invalid request.";
}
?>
