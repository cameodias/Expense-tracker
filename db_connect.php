<?php
$host = 'localhost'; // Database host
$dbname = 'expense_tracker'; // Database name
$username = 'root'; // Database username (default for XAMPP)
$password = ''; // Database password (default for XAMPP)

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>