<?php

$host = "localhost";
$user = "root";
$password = "Swami@2107";
$database = "login_system";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

echo "Database connected successfully!";

?>
