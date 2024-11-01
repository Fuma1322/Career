<?php
// db_connect.php
$host = '127.0.0.1';       // MySQL server host
$db = 'mycareer_platform.com';        // Replace with your actual database name
$user = 'root';             // XAMPP default username
$password = '';             // XAMPP default password

// Create a new MySQLi connection
$connection = new mysqli($host, $user, $password, $db);

// Check the connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Optional: Set character set to utf8
$connection->set_charset("utf8");
?>
