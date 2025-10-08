<?php
$host = 'localhost';
$port = 3308;
$dbname = 'crud_system';
$username = 'root';
$password = '';
$charset = 'utf8mb4';

    
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
     PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($host, $port, $dbname, $username, $password);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>