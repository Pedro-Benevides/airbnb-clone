<?php
session_start();

// Create connection
$conn = new mysqli(
    $_SESSION["DB_HOSTNAME"],
    $_SESSION["DB_USER"],
    null,
    $_SESSION["DB_DATABASE"],
    $_SESSION["DB_PORT"]
);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
    header("Location: ..\..\app\Views\pages\login.php");
}
