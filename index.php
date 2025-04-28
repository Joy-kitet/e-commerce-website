<?php
// Step 1: Connect to database

$servername = "localhost";   // Server name (default "localhost")
$username = "root";           // Your database username
$password = "";               // Your database password
$dbname = "shophub";          // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if connection works
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully!";
}

?>
