<?php
session_start(); // Start a session to store user data
include 'db_connect.php'; // Include the database connection file

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $email_or_phone = trim($_POST['email_or_phone']);
    $password = trim($_POST['password']);

    // Prepare and bind
    $stmt = $connection->prepare("SELECT * FROM users WHERE email_or_phone = ?");
    
    if ($stmt === false) {
        die("Prepare failed: " . htmlspecialchars($connection->error));
    }

    $stmt->bind_param("s", $email_or_phone);

    // Execute the statement
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if a user was found
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Store user information in session variables
            $_SESSION['user_id'] = $user['id']; // Assuming 'id' is the primary key in the users table
            $_SESSION['full_names'] = $user['full_names'];
            $_SESSION['email_or_phone'] = $user['email_or_phone'];
            $_SESSION['role'] = $user['role']; // Store user role

            // Redirect based on user role
            if ($user['role'] === 'admin') {
                header("Location: index.php");
            } elseif ($user['role'] === 'student') {
                header("Location: dashboard.php");
            } else {
                echo "Invalid user role.";
                exit();
            }
            exit();
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "User not found.";
    }

    // Close the statement and connection
    $stmt->close();
    $connection->close();
} else {
    echo "Invalid request.";
}
?>
