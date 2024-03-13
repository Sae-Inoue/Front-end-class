<?php
// Define database configuration
define('DB_TYPE', 'mysql');
const DB_HOST = '127.0.0.1';
const DB_PORT = 3306;
const DB_NAME = 'INITIALS_saas_fed';
const DB_USER = 'INITIALS_saas_fed';
const DB_PASS = 'Password1';

// Create database connection (Database Source Name)
$dsn = DB_TYPE . ':host=' . DB_HOST . ';port=' . DB_PORT .
    ";dbname=" . DB_NAME . ';charset=utf8;';

try {
    $pdo = new PDO($dsn, DB_USER, DB_PASS);
// Error mode will be exception based
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// Retrieve data as associative array
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $messages['success'] = "Connected to DB";
} catch (PDOException $error) {
    echo "<h2>ERROR</h2>";
    echo "<p>Database Connection Issue: {$error->getMessage()}</p>";
    die();
}
