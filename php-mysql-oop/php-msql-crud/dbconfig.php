<?php
define('DB_HOST', '<your_hostname>');
define('DB_NAME', '<your_database_name>');
define('DB_USER', '<your_username>');
define('DB_PASS', '<your_password>');

try {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (PDOException $e) {
    die("Could not connect to the database " . DB_NAME . ": " . $e->getMessage());
}