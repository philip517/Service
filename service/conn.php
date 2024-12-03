<?php
// Database connection parameters
$host = 'localhost';
$dbname = 'service';
$username = 'philip';
$password = 'test1234';

try {
    // Establish a PDO connection
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "success";
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>