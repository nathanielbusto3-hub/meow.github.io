<?php
// Database credentials
$host = 'localhost';
$port = '3308';
$db   = 'crud_system';     // Your database name
$user = 'root';           // Your database username
$pass = '';               // Your database password (leave blank if none on localhost)
$charset = 'utf8mb4';

// Data Source Name
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// Options for PDO
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Show exceptions on errors
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Fetch associative arrays
    PDO::ATTR_EMULATE_PREPARES   => false,                  // Use native prepares
];

try {
    // Create PDO instance
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    // Stop execution and show error if connection fails
    exit('Database connection failed: ' . $e->getMessage());
}
