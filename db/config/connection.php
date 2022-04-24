<?php
// $servername = getenv("DB_SERVER_NAME");
// $username = getenv("DB_USER");
// $password = getenv("DB_PASSWORD");

// Create connection
$conn = new mysqli(getenv("DB_HOSTNAME"), getenv("DB_USER"), getenv("DB_PASSWORD"));

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
