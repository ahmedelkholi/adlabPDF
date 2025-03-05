<?php
// PDO Connection
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'website_analytics';

try {
    $conn = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8mb4", $dbUser, $dbPass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

?>