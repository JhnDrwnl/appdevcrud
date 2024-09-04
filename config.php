<?php
$host = 'localhost'; // Replace with your host
$db   = 'products'; // Replace with your database name
$user = 'root'; // Default MySQL username
$pass = ''; // Empty password for local development (if applicable)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass); // Connect with root and no password
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database $db: " . $e->getMessage());
}
?>