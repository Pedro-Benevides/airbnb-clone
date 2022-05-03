<?php
require '../../env.php';

// Create connection
$conn = new mysqli(
    $_SESSION['DB_HOSTNAME'],
    $_SESSION['DB_USER'],
    null,
    $_SESSION['DB_DATABASE'],
    $_SESSION['DB_PORT']
);

$_SESSION['CONNECTION'] = $conn;
// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
