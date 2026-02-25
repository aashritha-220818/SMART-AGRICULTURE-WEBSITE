<?php
require_once __DIR__ . '/../vendor/autoload.php';

$env = parse_ini_file(__DIR__ . '/../.env');

try {
    $client = new MongoDB\Client($env['MONGO_URI']);
    
    // Correct way to select database
    $database = $client->selectDatabase($env['DB_NAME']);

} catch (Exception $e) {
    die("Database Connection Failed: " . $e->getMessage());
}