<?php
// db.php – Database connection file
$host = 'localhost';
$db = 'cloud_web_db';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>